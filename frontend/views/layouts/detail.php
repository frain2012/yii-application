<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <?= Html::csrfMetaTags() ?>
    <title>
        <?php if (empty($this->title)){  echo Html::encode($this->params['config']->title);
        }else{
            echo Html::encode($this->title.'-'.$this->params['config']->title);
        }?>
    </title>
    <meta name="keywords" content="<?= Html::encode($this->params['config']->keywords) ?>" />
    <meta name="description" content="<?= Html::encode($this->params['config']->description) ?>" />
    <?php $this->head() ?>
    <script type="text/javascript">
        var siteUrl='<?=YII::$app->request->hostInfo?>';
    </script>
    <!--[if lt IE 9]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<!--header-->
<?php include "header.php"?>
<!--header-->
<?php $this->beginBody() ?>
<div class="container">
    <div class="row">

        <?= $content ?>

    </div>
</div>



<!--footer--->
<?php include "footer.php"?>
<!--footer--->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
