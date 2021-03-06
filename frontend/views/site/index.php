<?php

/* @var $this yii\web\View */

?>
<!--轮播-->
<!--div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="stui-pannel-bd">
            <div class="carousel carousel_default carousel_center">
                <div class="col-md-2 col-xs-1 gallery-cell">
                    <a target="_blank" href="/film/index32197.html" class="stui-vodlist__thumb" title="一出好戏" style="background: url(https://ww1.sinaimg.cn/large/006MBSBsgy1fu5aqgwn8nj30ip091gxi.jpg) no-repeat; background-position:50% 50%; background-size: cover; padding-top: 45%;"><span class="pic-text text-center">一出好戏</span></a>
                </div>
                <div class="col-md-2 col-xs-1 gallery-cell">
                    <a target="_blank" href="/film/index26076.html" class="stui-vodlist__thumb" title="狂暴巨兽" style="background: url(https://ww1.sinaimg.cn/large/006MBSBsgy1fqbuc2p1bjj30u00dvtas.jpg) no-repeat; background-position:50% 50%; background-size: cover; padding-top: 45%;"><span class="pic-text text-center">狂暴巨兽</span></a>
                </div>
                <div class="col-md-2 col-xs-1 gallery-cell">
                    <a target="_blank" href="/film/index32195.html" class="stui-vodlist__thumb" title="风语咒" style="background: url(https://ww1.sinaimg.cn/large/006MBSBsgy1fu5aseq3idj30ig0aa4a3.jpg) no-repeat; background-position:50% 50%; background-size: cover; padding-top: 45%;"><span class="pic-text text-center">风语咒</span></a>
                </div>
            </div>
        </div>

    </div>
</div-->
<!--轮播-->
<!--电影-->
<?php  if(!empty($movie)){?>
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="col-lg-wide-75 col-xs-1 padding-0">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/site/list-1.html">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_1.png"><a href="/site/list-1.html">电影</a></h3>
                    <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                        <?php
                            if(!empty($subType)){
                            foreach ($subType as $item){    if ($item->fid==1){
                                ?>
                                <li><a href="/site/list-1-<?=$item->id?>.html" class="text-muted"><?=$item->name?></a> <span class="split-line"></span></li>
                            <?php } } }?>
                    </ul>
                </div>
            </div>
            <div class="stui-pannel_bd clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php foreach ($movie as $item){?>
                        <li class="col-md-5 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);">
                                    <span class="play hidden-xs"></span><span class="pic-text text-right"><?=$item->word?></span></a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow"><a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>"><?=$item->name?></a></h4>
                                    <p class="text text-overflow text-muted hidden-xs"><?=$item->staring?> </p>
                                </div>
                            </div></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/site/list-1.html">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_12.png">最近更新</h3>
                </div>
            </div>
            <div class="stui-pannel_bd">

                <ul class="stui-vodlist__media active col-pd clearfix">
                    <?php foreach ($movieTop as $k=> $item){?>
                    <li>
                        <div class="thumb">
                            <a class="m-thumb stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);"><span class="pic-tag pic-tag-h">1</span></a>
                        </div>
                        <div class="detail detail-side">
                            <h4 class="title"><a target="_blank" href="/site/detail-<?=$item->id?>.html"><i class="icon iconfont icon-more text-muted pull-right"></i><?=strstr($item->name,"《")?></a></h4>
                            <p class="font-12"><span class="text-muted">类型：</span><?=$item->gtype?> , <span class="text-muted">地区：</span><?=$item->area?></p>
                            <p class="font-12 margin-0"><span class="text-muted">主演：</span></p>
                        </div></li>
                        <?php }?>
                </ul>
                <ul class="stui-vodlist__rank col-pd clearfix">
                    <?php foreach ($movieRight as $k=> $item){?>
                    <li>
                        <a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>">
                            <span class="text-muted pull-right"></span>
                            <span class="badge <?php if($k==0){ echo "badge-second";  }if($k==1){ echo "badge-third";} ?>"><?=$k+2?></span>
                            <?=strstr($item->name,"《")?>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!--right-->
            <?php include "right.php"?>
            <!--right-->
        </div>
    </div>
</div>
<?php }?>
<!--电影-->
<!--电视剧-->
<?php if(!empty($tv)){?>
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="col-lg-wide-75 col-xs-1 padding-0">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/site/list-2.html">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_2.png"><a href="/site/list-2">电视剧</a></h3>
                    <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                        <?php
                        if(!empty($subType)){
                            foreach ($subType as $item){    if ($item->fid==2){
                                ?>
                                <li><a href="/site/list-2-<?=$item->id?>.html" class="text-muted"><?=$item->name?></a> <span class="split-line"></span></li>
                            <?php } } }?>
                    </ul>
                </div>
            </div>
            <div class="stui-pannel_bd clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php foreach ($tv as $item){?>
                        <li class="col-md-5 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);"><span class="play hidden-xs"></span><span class="pic-text text-right">更新至38集/共52集</span></a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow"><a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>"><?=$item->name?></a></h4>
                                    <p class="text text-overflow text-muted hidden-xs"><?=$item->staring?></p>
                                </div>
                            </div></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/search.php?searchtype=5&amp;tid=2&amp;order=hit">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_12.png">最近更新</h3>
                </div>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist__media active col-pd clearfix">
                    <li>
                        <div class="thumb">
                            <a class="m-thumb stui-vodlist__thumb lazyload" target="_blank" href="/film/index34741.html" title="仙女/仙女与怨灵" data-original="https://ww1.sinaimg.cn/large/006MBSBsgy1fw026xzx30j307i090wev.jpg" style="background-image: url(&quot;https://ww1.sinaimg.cn/large/006MBSBsgy1fw026xzx30j307i090wev.jpg&quot;);"><span class="pic-tag pic-tag-h">1</span></a>
                        </div>
                        <div class="detail detail-side">
                            <h4 class="title"><a target="_blank" href="/film/index34741.html"><i class="icon iconfont icon-more text-muted pull-right"></i> 仙女/仙女与怨灵</a></h4>
                            <p class="font-12"><span class="text-muted">类型：</span>海外剧 , <span class="text-muted">地区：</span>泰国</p>
                            <p class="font-12 margin-0"><span class="text-muted">主演：</span>阿卡潘·纳玛查 皮查雅·瓦..</p>
                        </div></li>
                </ul>
                <ul class="stui-vodlist__rank col-pd clearfix">
                    <li><a target="_blank" href="/film/index33867.html" title="你迟到的许多年"><span class="text-muted pull-right">更新至38集/..</span><span class="badge badge-second">2</span>你迟到的许多年</a></li>
                    <li><a target="_blank" href="/film/index35447.html" title="长城红"><span class="text-muted pull-right">更新至24集/..</span><span class="badge badge-third">3</span>长城红</a></li>
                    <li><a target="_blank" href="/film/index35394.html" title="正阳门下小女人"><span class="text-muted pull-right">更新至15集/..</span><span class="badge">4</span>正阳门下小女人</a></li>
                    <li><a target="_blank" href="/film/index35065.html" title="绝密任务"><span class="text-muted pull-right">更新至26集/..</span><span class="badge">5</span>绝密任务</a></li>
                    <li><a target="_blank" href="/film/index34701.html" title="创业时代"><span class="text-muted pull-right">更新至2集/共..</span><span class="badge">6</span>创业时代</a></li>
                    <li><a target="_blank" href="/film/index34186.html" title="长江往事/喋血长江"><span class="text-muted pull-right">更新至48集/..</span><span class="badge">7</span>长江往事/喋血..</a></li>
                    <li><a target="_blank" href="/film/index33590.html" title="如若巴黎不快乐"><span class="text-muted pull-right">更新至34集/..</span><span class="badge">8</span>如若巴黎不快乐</a></li>
                    <li><a target="_blank" href="/film/index35831.html" title="锁清秋"><span class="text-muted pull-right">35集已完结</span><span class="badge">9</span>锁清秋</a></li>
                    <li><a target="_blank" href="/film/index35878.html" title="X档案第七季"><span class="text-muted pull-right">22集已完结</span><span class="badge">10</span>X档案第七季</a></li>
                </ul>
            </div>
            <!--right-->
            <?php include "right.php"?>
            <!--right-->
        </div>
    </div>
</div>
<?php }?>
<!--电视剧-->
<!--动漫-->
<?php if(!empty($comic)){?>
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="col-lg-wide-75 col-xs-1 padding-0">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/site/list-3.html">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_3.png"><a href="/site/list-3.html">动漫</a></h3>
                    <ul class="nav nav-text pull-right hidden-sm hidden-xs"></ul>
                </div>
            </div>
            <div class="stui-pannel_bd clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php foreach ($comic as $item){?>
                        <li class="col-md-5 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);">
                                    <span class="play hidden-xs"></span><span class="pic-text text-right">更新至11集/共40集</span></a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow"><a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>"><?=$item->name?></a></h4>
                                    <p class="text text-overflow text-muted hidden-xs"><?=$item->staring?></p>
                                </div>
                            </div></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/search.php?searchtype=5&amp;tid=3&amp;order=hit">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_12.png">最近更新</h3>
                </div>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist__media active col-pd clearfix">
                    <li>
                        <div class="thumb">
                            <a class="m-thumb stui-vodlist__thumb lazyload" target="_blank" href="/film/index34550.html" title="东京食尸鬼第四季" data-original="https://ww1.sinaimg.cn/large/006MBSBsgy1fvxa06crwbj307i0aldga.jpg" style="background-image: url(&quot;https://ww1.sinaimg.cn/large/006MBSBsgy1fvxa06crwbj307i0aldga.jpg&quot;);"><span class="pic-tag pic-tag-h">1</span></a>
                        </div>
                        <div class="detail detail-side">
                            <h4 class="title"><a target="_blank" href="/film/index34550.html"><i class="icon iconfont icon-more text-muted pull-right"></i> 东京食尸鬼第四季</a></h4>
                            <p class="font-12"><span class="text-muted">类型：</span>动漫 , <span class="text-muted">地区：</span>日本</p>
                            <p class="font-12 margin-0"><span class="text-muted">主演：</span>内详</p>
                        </div></li>
                </ul>
                <ul class="stui-vodlist__rank col-pd clearfix">
                    <li><a target="_blank" href="/film/index35871.html" title="天空的遇难船名侦探柯南剧场版十四部"><span class="text-muted pull-right">高清</span><span class="badge badge-second">2</span>天空的遇难船名..</a></li>
                    <li><a target="_blank" href="/film/index33735.html" title="黑色四叶草"><span class="text-muted pull-right">更新至55集</span><span class="badge badge-third">3</span>黑色四叶草</a></li>
                    <li><a target="_blank" href="/film/index35838.html" title="小布与伟仔"><span class="text-muted pull-right">39集已完结</span><span class="badge">4</span>小布与伟仔</a></li>
                    <li><a target="_blank" href="/film/index34010.html" title="妖神记3：影妖篇"><span class="text-muted pull-right">更新至11集/..</span><span class="badge">5</span>妖神记3：影妖..</a></li>
                    <li><a target="_blank" href="/film/index34307.html" title="轩辕剑‧苍之曜"><span class="text-muted pull-right">更新至4集</span><span class="badge">6</span>轩辕剑‧苍之曜</a></li>
                    <li><a target="_blank" href="/film/index34306.html" title="宇宙战舰提拉米苏第二季"><span class="text-muted pull-right">更新至4集</span><span class="badge">7</span>宇宙战舰提拉米..</a></li>
                    <li><a target="_blank" href="/film/index34305.html" title="关于我转生变成史莱姆这档事"><span class="text-muted pull-right">更新至4集/共..</span><span class="badge">8</span>关于我转生变成..</a></li>
                    <li><a target="_blank" href="/film/index33729.html" title="队长小翼（足球小将）"><span class="text-muted pull-right">更新至30集/..</span><span class="badge">9</span>队长小翼（足球..</a></li>
                    <li><a target="_blank" href="/film/index31486.html" title="盛世妆娘"><span class="text-muted pull-right">更新至15集/..</span><span class="badge">10</span>盛世妆娘</a></li>
                </ul>
            </div>
            <!--right-->
            <?php include "right.php"?>
            <!--right-->
        </div>
    </div>
</div>
<?php }?>
<!--动漫-->
<!--综艺-->
<?php  if(!empty($variety)){?>
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="col-lg-wide-75 col-xs-1 padding-0">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/site/list-4.html">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_4.png"><a href="/site/list-4.html">综艺</a></h3>
                    <ul class="nav nav-text pull-right hidden-sm hidden-xs"></ul>
                </div>
            </div>
            <div class="stui-pannel_bd clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php foreach ($variety as $item){?>
                        <li class="col-md-5 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);">
                                    <span class="play hidden-xs"></span><span class="pic-text text-right">20181021</span></a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow"><a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>"><?=$item->name?></a></h4>
                                    <p class="text text-overflow text-muted hidden-xs"><?=$item->staring?></p>
                                </div>
                            </div></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                    <a class="more text-muted pull-right" href="/search.php?searchtype=5&amp;tid=4&amp;order=hit">更多 <i class="icon iconfont icon-more"></i></a>
                    <h3 class="title"><img src="/images/icon_12.png">最近更新</h3>
                </div>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist__media active col-pd clearfix">
                    <li>
                        <div class="thumb">
                            <a class="m-thumb stui-vodlist__thumb lazyload" target="_blank" href="/film/index33773.html" title="大哥是对的" data-original="https://ww1.sinaimg.cn/large/006MBSBsgy1fvn4tp0gghj30az06o3ys.jpg" style="background-image: url(&quot;https://ww1.sinaimg.cn/large/006MBSBsgy1fvn4tp0gghj30az06o3ys.jpg&quot;);"><span class="pic-tag pic-tag-h">1</span></a>
                        </div>
                        <div class="detail detail-side">
                            <h4 class="title"><a target="_blank" href="/film/index33773.html"><i class="icon iconfont icon-more text-muted pull-right"></i> 大哥是对的</a></h4>
                            <p class="font-12"><span class="text-muted">类型：</span>综艺 , <span class="text-muted">地区：</span>台湾</p>
                            <p class="font-12 margin-0"><span class="text-muted">主演：</span>庹宗康 孙鹏 屈中恆 </p>
                        </div></li>
                </ul>
                <ul class="stui-vodlist__rank col-pd clearfix">
                    <li><a target="_blank" href="/film/index33771.html" title="麻辣天后传"><span class="text-muted pull-right">20181023</span><span class="badge badge-second">2</span>麻辣天后传</a></li>
                    <li><a target="_blank" href="/film/index33770.html" title="女人我最大"><span class="text-muted pull-right">20181023</span><span class="badge badge-third">3</span>女人我最大</a></li>
                    <li><a target="_blank" href="/film/index33769.html" title="食尚玩家"><span class="text-muted pull-right">20181023</span><span class="badge">4</span>食尚玩家</a></li>
                    <li><a target="_blank" href="/film/index33768.html" title="小明星大跟班"><span class="text-muted pull-right">20181023</span><span class="badge">5</span>小明星大跟班</a></li>
                    <li><a target="_blank" href="/film/index33767.html" title="型男大主厨"><span class="text-muted pull-right">20181023</span><span class="badge">6</span>型男大主厨</a></li>
                    <li><a target="_blank" href="/film/index33779.html" title="WTO姐妹会"><span class="text-muted pull-right">20181022</span><span class="badge">7</span>WTO姐妹会</a></li>
                    <li><a target="_blank" href="/film/index34314.html" title="草地状元"><span class="text-muted pull-right">20181022</span><span class="badge">8</span>草地状元</a></li>
                    <li><a target="_blank" href="/film/index33778.html" title="爱玩客"><span class="text-muted pull-right">20181022</span><span class="badge">9</span>爱玩客</a></li>
                    <li><a target="_blank" href="/film/index33777.html" title="金牌大健谍"><span class="text-muted pull-right">20181022</span><span class="badge">10</span>金牌大健谍</a></li>
                </ul>
            </div>
            <!--right-->
            <?php include "right.php"?>
            <!--right-->
        </div>
    </div>
</div>
<?php }?>
<!--综艺-->
