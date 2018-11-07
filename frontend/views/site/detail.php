<?php


$this->title=$film->name;
echo $this->title;
?>
<!--详情-->
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="stui-pannel_bd clearfix">
            <div class="col-md-wide-75 col-xs-1">
                <div class="stui-content clearfix">
                    <div class="stui-content__thumb">
                        <a class="stui-vodlist__thumb v-thumb lazyload" target="_blank" href="/site/play-<?=$film->id?>.html" title="<?=$film->name?>" data-original="<?=$film->cover?>" style="background-image: url(&quot;https://ww1.sinaimg.cn/large/006MBSBsgy1fpy3we98xnj305006k0t1.jpg&quot;);">
											<span class="play active hidden-xs"></span>
                        </a>
                    </div>
                    <div class="stui-content__detail">
                        <h3 class="title">
                            <?=$film->name?>
                        </h3>
                        <p class="data">
                            <span class="text-muted">
                                主演：
                            </span>
                            <?=$film->staring?>
                            &nbsp;&nbsp;
                        </p>
                        <p class="data">
                            <span class="text-muted">导演：</span>
                            <?=$film->director?>
                            &nbsp;&nbsp;
                        </p>
                        <p class="data">
                            <span class="text-muted">类型：</span>动画片
                            <span class="split-line"></span>
                            <span class="text-muted hidden-xs">地区：</span>欧美
                            <span class="split-line"></span>
                            <span class="text-muted hidden-xs">年份：</span>
                            20150717
                        </p>
                        <p class="desc detail hidden-xs">
                            <span class="left text-muted">简介：</span>
                            <span class="detail-sketch">
                                <?=mb_substr($film->introduce,0,100,'utf-8')?>...
                            </span>
                            <span class="detail-content" style="display: none;">
                                <?=$film->introduce?>...。
                            </span>
                            <a class="detail-more" href="javascript:;">
                                详情
                                <i class="icon iconfont icon-moreunfold"></i>
                            </a>
                        </p>
                        <div class="play-btn clearfix">
                            <div class="share bdsharebuttonbox hidden-sm hidden-xs pull-right">
                            </div>
                            <a class="btn btn-primary" target="_blank" href="/site/play-<?=$film->id?>-0-1.html">
                                立即播放
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-wide-25 hidden-md hidden-sm hidden-xs">
                <div class="text-center" style="padding: 45px;">
                    <p>
                        <img class="qrcode" width="180" height="180" src="https://ww1.sinaimg.cn/large/006MBSBsgy1fs4odba4voj305k05k3yo.jpg">
                    </p>
                    <p class="font-12">
                        扫码用手机观看
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--详情-->
<?php if (!empty($channel)){ foreach ($channel as $item){ ?>
    <!--通道-->
    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head bottom-line active clearfix">
                    <span class="more text-muted pull-right">
                        <?=$item->key?>
                    </span>
                    <h3 class="title">
                        <?=$item->name?>
                    </h3>
                </div>
            </div>

            <div class="stui-pannel_bd col-pd clearfix">
                <ul class="stui-content__playlist clearfix">
                    <?php
                    if (!empty($details)){ foreach ($details as $item1){
                        if ($item1->type==$item->id){?>
                    <li>
                        <a title="<?=$item1->key?>" href="/site/play-<?=$item1->id?>.html" target="_self"><?=$item1->key?></a>
                    </li>
                    <?php } } }?>
                </ul>
            </div>
        </div>
    </div>
<?php } }?>

<!--猜你喜欢-->
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head clearfix">
                <h3 class="title">
                    <img src="/images/icon_6.png">
                    猜你喜欢
                </h3>
            </div>
        </div>
        <div class="stui-pannel_bd">
            <ul class="stui-vodlist__bd clearfix">
                <?php
                    if(!empty($datas)){
                        foreach ($datas as $item){?>
                    <li class="col-md-6 col-sm-4 col-xs-3">
                        <div class="stui-vodlist__box">
                            <a class="stui-vodlist__thumb lazyload" target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;<?=$item->cover?>&quot;);">
                                <span class="play hidden-xs"></span>
                                <span class="pic-text text-right"><?=$item->tip?></span>
                            </a>
                            <div class="stui-vodlist__detail padding-0">
                                <h4 class="title text-overflow">
                                    <a target="_blank" href="/site/detail-<?=$item->id?>.html" title="<?=$item->name?>">
                                        <?=$item->name?>
                                    </a>
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
<!--猜你喜欢-->