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
                        <form name="formsearch" id="formsearch" action="" method="post" autocomplete="off">
                            <input class="form-control" id="wd" placeholder="输入影片关键词..." name="searchword" type="text" required="" />
                            <input type="submit" id="searchbutton" value="" class="hide" />
                            <button class="submit" id="submit" onclick="$('#formsearch').submit();"><i class="icon iconfont icon-search"></i></button>
                        </form>
                        <div id="word" class="autocomplete-suggestions active hidden-xs" style="display: none;"></div>
                    </div>
                </div>
                <ul class="stui-header__menu type-slide">
                    <li><a href="/">首页</a></li>
                    <li><a href="/site/list-1.html">电影</a></li>
                    <li><a href="/site/list-2.html">电视剧</a></li>
                    <li><a href="/site/list-3.html">动漫</a></li>
                    <li><a href="/site/list-4.html">综艺</a></li>
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
                    <li class="col-xs-4"><a href="/site/list/<?=$item->id?>"><?=$item->name?></a></li>
                <?php } }?>
        </ul>
    </div>
</div>
