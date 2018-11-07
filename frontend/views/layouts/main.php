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
    <title><?= Html::encode(strtr($this->params['config']->title,"#",$this->title)) ?></title>
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
        <!--公告-->
        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_bd">
                    <div class="col-pd clearfix">
                        <i class="icon iconfont icon-remind text-red"></i> 公告：网站更换新域名www.itech.wang！！！
                    </div>
                </div>
            </div>
        </div>
        <!--公告-->

        <?= $content ?>


        <!--友情链接-->
        <div class="stui-pannel stui-pannel-bg hidden-sm hidden-xs clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head clearfix">
                        <h3 class="title"><img src="/images/icon_26.png">友情链接</h3>
                    </div>
                </div>
                <div class="stui-pannel_bd clearfix">
                    <div class="col-xs-1">
                        <ul class="stui-link__text clearfix">
                            <?php
                                if(!empty($this->params['link'])){
                                    foreach ($this->params['link'] as $item){?>
                                <li><a class="text-muted" href="<?=$item->link?>" title="<?=$item->name?>" target="_blank"><?=$item->value?></a></li>
                            <?php } }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--友情链接-->
    </div>
</div>



<!--footer--->
<?php include "footer.php"?>
<!--footer--->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
