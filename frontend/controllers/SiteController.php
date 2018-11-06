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
use yii\data\Pagination;

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
        $subType =TType::find()->orderBy(" sort_id asc")->all();
        return $this->render('index',['movie'=>$movie,'tv'=>$tv,'comic'=>$comic,'variety'=>$variety,'subType'=>$subType]);
    }

    /**
     * 列表页面
     */
    public function actionList(){
        //父类型
        $id = Yii::$app->request->get("id",0);
        if (empty($id)){
            $id=1;
        }
        $curType = TType::findOne(['id'=>$id]);
        //子类型
        $sid = Yii::$app->request->get("sid",0);
        if (!empty($sid)){

        }


        $this->layoutData(false);
        $this->layout="list";
        $type = TType::find()->where(['fid'=>$id])->orderBy("sort_id asc")->all();
        //查询
        $query = TFilm::find()->where(['type'=>$type]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 10]);
        $datas = $query->offset($pages->offset)->orderBy(['id' => SORT_DESC])->limit($pages->limit)->all();
        return $this->render('list',['type'=>$type,'curType'=>$curType,'datas'=>$datas,'page' => $pages]);
    }

    /**
     * 详情页面
     * @return string
     */
    public function actionDetail(){
        $id = Yii::$app->request->get("id",0);
        $film = TFilm::findOne(['id'=>$id]);
        $this->layout="detail";
        $this->layoutData(false);
        //猜你喜欢
        $datas = TFilm::findBySql("SELECT * FROM t_film  WHERE id!=$id  and id >= (SELECT floor(RAND() * (SELECT MAX(id) FROM t_film))) ORDER BY id LIMIT 0,10")->all();
        return $this->render('detail',['film'=>$film,'datas'=>$datas]);
    }

    /**
     * 播放页面
     */
    public function actionPlay(){
        $id = Yii::$app->request->get("id",0);
        $this->layout="play";
        $this->layoutData(false);
        $film = TFilm::findOne(['id'=>$id]);
        //猜你喜欢
        $datas = TFilm::findBySql("SELECT * FROM t_film  WHERE id!=$id  and id >= (SELECT floor(RAND() * (SELECT MAX(id) FROM t_film))) ORDER BY id LIMIT 0,10")->all();
        return $this->render('play',['film'=>$film,'datas'=>$datas]);

    }



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


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
