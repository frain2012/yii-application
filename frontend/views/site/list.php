<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;

$this->title="category";
?>
<!--类别-->
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head active bottom-line clearfix">
                <h3 class="title">
                    <img src="/images/icon_25.png"><?=$curType->name?>
                </h3>
                <ul class="nav nav-page pull-right">
                    <li>
                        <a href="/Column/index12-0.html"><i class="icon iconfont icon-back"></i></a>
                    </li>
                    <li>
                        <a href="/Column/index12-2.html"><i class="icon iconfont icon-more"></i></a>
                    </li>
                </ul>
                <span class="more text-muted pull-right hidden-xs">
									共有“<?=$page->totalCount?>”部影片
                </span>
            </div>
            <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                <li>
                    <span class="text-muted">按分类</span>
                </li>
                <?php
                if(!empty($type)){
                    foreach ($type as $item){?>
                        <li <?php if ($sid==$item->id){ echo "class=\"active\"";} ?>>
                            <a href="list/<?=$item->id?>.html"><?=$item->name?></a>
                        </li>
                    <?php } }?>
            </ul>
            <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                <li>
                    <span class="text-muted">按地区</span>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E5%A4%A7%E9%99%86" title="大陆">
                        大陆
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E9%A6%99%E6%B8%AF" title="香港">
                        香港
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E5%8F%B0%E6%B9%BE" title="台湾">
                        台湾
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E6%97%A5%E6%9C%AC" title="日本">
                        日本
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E9%9F%A9%E5%9B%BD" title="韩国">
                        韩国
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E6%AC%A7%E7%BE%8E" title="欧美">
                        欧美
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E6%B3%B0%E5%9B%BD" title="泰国">
                        泰国
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;area=%E5%85%B6%E4%BB%96" title="其他">
                        其他
                    </a>
                </li>
            </ul>
            <ul class="stui-screen__list type-slide clearfix">
                <li>
                    <span class="text-muted">按年份</span>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2018" title="2018">
                        2018
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2017" title="2017">
                        2017
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2016" title="2016">
                        2016
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2015" title="2015">
                        2015
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2014" title="2014">
                        2014
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2013" title="2013">
                        2013
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2012" title="2012">
                        2012
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2011" title="2011">
                        2011
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2010" title="2010">
                        2010
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2009" title="2009">
                        2009
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2008" title="2008">
                        2008
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=2007" title="2007">
                        2007
                    </a>
                </li>
                <li>
                    <a href="/search.php?searchtype=5&amp;tid=12&amp;year=more" title="more">
                        more
                    </a>
                </li>
            </ul>
        </div>
        <div class="stui-pannel_bd">
            <ul class="stui-vodlist clearfix">
                <?php
                if(!empty($datas)){
                    foreach ($datas as $item){?>
                        <li class="col-md-6 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);">
                                    <span class="play hidden-xs"></span><span class="pic-text text-right">BD高清</span>
                                </a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow">
                                        <a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->cover?>"><?=$item->name?></a>
                                    </h4>
                                    <p class="text text-overflow text-muted hidden-xs">
                                        <?=$item->staring?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php } }?>
            </ul>
        </div>
    </div>
</div>
<!--类别-->
<!--分页-->
<ul class="stui-page text-center cleafix">
<?= LinkPager::widget(['pagination' => $page]); ?>
</ul>
<!--分页-->
