<?php
namespace frontend\controllers;

use common\models\movie\TConfig;
use common\models\movie\TFilm;
use common\models\movie\TLink;
use common\models\movie\TType;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * 设置模板数据
     */
    private function layoutData($isLink=true){
        $config = TConfig::findOne(['id'=>1]);
        Yii::$app->view->params['config'] = $config;
        if ($isLink){
            $link = TLink::find()->where(['fid'=>1])->orderBy(" sort_id asc")->all();
            Yii::$app->view->params['link'] = $link;
        }
        $type = TType::find()->where(['type'=>2])->orderBy(" fid,sort_id asc")->all();
        Yii::$app->view->params['type'] = $type;
    }

    /**
     * 主页
     * @return string
     */
    public function actionIndex()
    {
        $this->layoutData();
        //电影
        $movie = TFilm::find()->where(['type'=>1])->limit(10)->all();
        //电视剧
        $tv = TFilm::find()->where(['type'=>2])->limit(10)->all();
        //动漫
        $comic = TFilm::find()->where(['type'=>3])->limit(10)->all();
        //综艺
        $variety = TFilm::find()->where(['type'=>4])->limit(10)->all();
        //类型
        $subType =TType::find()->where(['fid'=>1])->orderBy(" sort_id asc")->all();
        return $this->render('index',['movie'=>$movie,'tv'=>$tv,'comic'=>$comic,'variety'=>$variety,'subType'=>$subType]);
    }

    /**
     * 类别页面
     */
    public function actionCategory(){
        $id = Yii::$app->request->get("id");
        $this->layoutData(false);
        $this->layout="category";
        $type = TType::find()->orderBy("sort_id asc")->all();

        return $this->render('category',['type'=>$type]);
    }

    /**
     * 列表页面
     */
    public function actionList(){
        $this->layout="list";
        $this->layoutData();
        $type = TType::find()->where()->orderBy("sort_id asc")->all();
        return $this->render('list',['type'=>$type]);
    }



    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
