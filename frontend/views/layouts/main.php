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
        var sitePath='', siteUrl='<?=YII::$app->request->hostInfo?>', sitepath='';
    </script>
    <!--[if lt IE 9]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<!--header-->
<header class="stui-header__top clearfix" id="header-top">
    <div class="container">
        <div class="row">
            <div class="stui-header_bd clearfix">
                <div class="stui-header__logo">
                    <a class="logo" href="/"></a>
                </div>
                <div class="stui-header__side">
                    <ul class="stui-header__user">
                        <!--<li class="hidden-xs"><a href="/login.php">
                <i class="icon iconfont icon-account"></i></a></li>-->
                        <li class="visible-xs"><a class="open-popup" href="javascript:;"><i class="icon iconfont icon-viewgallery"></i></a></li>
                    </ul>
                    <div class="stui-header__search">
                        <form name="formsearch" id="formsearch" action="/search.php" method="post" autocomplete="off">
                            <input class="form-control" id="wd" placeholder="输入影片关键词..." name="searchword" type="text" required="" />
                            <input type="submit" id="searchbutton" value="" class="hide" />
                            <button class="submit" id="submit" onclick="$('#formsearch').submit();"><i class="icon iconfont icon-search"></i></button>
                        </form>
                        <div id="word" class="autocomplete-suggestions active hidden-xs" style="display: none;"></div>
                    </div>
                </div>
                <ul class="stui-header__menu type-slide">
                    <li><a href="/">首页</a></li>
                    <li><a href="/Column/index1.html"> 电影</a></li>
                    <li><a href="/Column/index2.html"> 电视剧</a></li>
                    <li><a href="/Column/index3.html"> 动漫</a></li>
                    <li><a href="https://www.yingdou.net/Column/index4.html">综艺</a></li>
                    <li><a href="https://www.tiantk.com">小说</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--header-->
<div class="popup clearfix">
    <div class="popup-head bottom-line">
        <h5 class="title pull-right">全部分类</h5>
        <a href="javascript:;" class="close-popup"><i class="icon iconfont icon-back"></i></a>
    </div>
    <div class="popup-body col-pd">
        <ul class="tag tag-type">
            <?php
            if(!empty($this->params['type'])){
                foreach ($this->params['type'] as $item){?>
                    <li class="col-xs-4"><a href="list/<?=$item->id?>"><?=$item->name?></a></li>
                <?php } }?>
        </ul>
    </div>
</div>
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
<div class="container">
    <div class="row">
        <div class="stui-foot clearfix">
            <div class="col-pd text-center hidden-xs">
                本网站提供新电视剧和电影资源均系收集于各大视频网站，本网站只提供web页面服务，并不提供影片资源存储，也不参与录制、 上传若本站收录的节目无意侵犯了贵司版权，请给frain2012@sina.com邮箱地址来信，我们将在第一时间处理与回复,谢谢!
            </div>
            <p class="text-center hidden-xs"><a href="http://www.itech.wang" target="_blank" title="爱电影网"><img src="/images/copy.png" width="150" height="48" alt="爱电影网" /></a></p>
            <p class="text-muted text-center visible-xs">Copyright &copy; 2008-2018</p>
        </div>
    </div>
</div>
<ul class="stui-extra clearfix">
    <li><a class="backtop" href="javascript:scroll(0,0)" style="display: none;"><i class="icon iconfont icon-less"></i></a></li>
    <li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
    <li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
        <div class="sideslip">
            <div class="col-pd">
                <img class="qrcode" width="150" height="150" />
                <p class="text-center font-12">扫码用手机访问</p>
            </div>
        </div></li>
    <li><a href="/gbook.php"><i class="icon iconfont icon-comments"></i></a></li>
</ul>
<div class="hide">
    <script src="https://s19.cnzz.com/z_stat.php?id=1275136617&web_id=1275136617" language="JavaScript"></script>
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?8dcbc9caddf484a9337335ecd47e5df8";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
