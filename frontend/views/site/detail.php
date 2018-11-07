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
<!--通道1-->
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head bottom-line active clearfix">
				<span class="more text-muted pull-right">
					推荐极速线路播放，支持手机看片
				</span>
                <h3 class="title">
                    云播
                </h3>
            </div>
        </div>

        <div class="stui-pannel_bd col-pd clearfix">
            <ul class="stui-content__playlist clearfix">
                <li>
                    <a title="34" href="/play/32741-0-0.html" target="_self">
                        34
                    </a>
                </li>
                <li>
                    <a title="33" href="/play/32741-0-1.html" target="_self">
                        33
                    </a>
                </li>
                <li>
                    <a title="32" href="/play/32741-0-2.html" target="_self">
                        32
                    </a>
                </li>
                <li>
                    <a title="31" href="/play/32741-0-3.html" target="_self">
                        31
                    </a>
                </li>
                <li>
                    <a title="30" href="/play/32741-0-4.html" target="_self">
                        30
                    </a>
                </li>
                <li>
                    <a title="29" href="/play/32741-0-5.html" target="_self">
                        29
                    </a>
                </li>
                <li>
                    <a title="28" href="/play/32741-0-6.html" target="_self">
                        28
                    </a>
                </li>
                <li>
                    <a title="27" href="/play/32741-0-7.html" target="_self">
                        27
                    </a>
                </li>
                <li>
                    <a title="26" href="/play/32741-0-8.html" target="_self">
                        26
                    </a>
                </li>
                <li>
                    <a title="25" href="/play/32741-0-9.html" target="_self">
                        25
                    </a>
                </li>
                <li>
                    <a title="24" href="/play/32741-0-10.html" target="_self">
                        24
                    </a>
                </li>
                <li>
                    <a title="23" href="/play/32741-0-11.html" target="_self">
                        23
                    </a>
                </li>
                <li>
                    <a title="22" href="/play/32741-0-12.html" target="_self">
                        22
                    </a>
                </li>
                <li>
                    <a title="21" href="/play/32741-0-13.html" target="_self">
                        21
                    </a>
                </li>
                <li>
                    <a title="20" href="/play/32741-0-14.html" target="_self">
                        20
                    </a>
                </li>
                <li>
                    <a title="19" href="/play/32741-0-15.html" target="_self">
                        19
                    </a>
                </li>
                <li>
                    <a title="18" href="/play/32741-0-16.html" target="_self">
                        18
                    </a>
                </li>
                <li>
                    <a title="17" href="/play/32741-0-17.html" target="_self">
                        17
                    </a>
                </li>
                <li>
                    <a title="16" href="/play/32741-0-18.html" target="_self">
                        16
                    </a>
                </li>
                <li>
                    <a title="15" href="/play/32741-0-19.html" target="_self">
                        15
                    </a>
                </li>
                <li>
                    <a title="14" href="/play/32741-0-20.html" target="_self">
                        14
                    </a>
                </li>
                <li>
                    <a title="13" href="/play/32741-0-21.html" target="_self">
                        13
                    </a>
                </li>
                <li>
                    <a title="12" href="/play/32741-0-22.html" target="_self">
                        12
                    </a>
                </li>
                <li>
                    <a title="11" href="/play/32741-0-23.html" target="_self">
                        11
                    </a>
                </li>
                <li>
                    <a title="10" href="/play/32741-0-24.html" target="_self">
                        10
                    </a>
                </li>
                <li>
                    <a title="09" href="/play/32741-0-25.html" target="_self">
                        09
                    </a>
                </li>
                <li>
                    <a title="08" href="/play/32741-0-26.html" target="_self">
                        08
                    </a>
                </li>
                <li>
                    <a title="07" href="/play/32741-0-27.html" target="_self">
                        07
                    </a>
                </li>
                <li>
                    <a title="06" href="/play/32741-0-28.html" target="_self">
                        06
                    </a>
                </li>
                <li>
                    <a title="05" href="/play/32741-0-29.html" target="_self">
                        05
                    </a>
                </li>
                <li>
                    <a title="04" href="/play/32741-0-30.html" target="_self">
                        04
                    </a>
                </li>
                <li>
                    <a title="03" href="/play/32741-0-31.html" target="_self">
                        03
                    </a>
                </li>
                <li>
                    <a title="02" href="/play/32741-0-32.html" target="_self">
                        02
                    </a>
                </li>
                <li>
                    <a title="01" href="/play/32741-0-33.html" target="_self">
                        01
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--通道1-->
<!--通道2-->
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head bottom-line active clearfix">
								<span class="more text-muted pull-right">
									推荐极速线路播放，支持手机看片
								</span>
                <h3 class="title">
                    奇艺视频
                </h3>
            </div>
        </div>
        <div class="stui-pannel_bd col-pd clearfix">
            <ul class="stui-content__playlist clearfix">
                <li>
                    <a title="BD高清" href="/play/16333-0-0.html" target="_self">
                        BD高清
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--通道2-->
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
                            <a class="stui-vodlist__thumb lazyload" target="_blank" href="/film/index32195.html" title="<?=$item->name?>" data-original="<?=$item->cover?>" style="background-image: url(&quot;https://wx2.sinaimg.cn/mw690/0077WiZbgy1fu58f2bfhcj307i0b9aao.jpg&quot;);">
                                <span class="play hidden-xs"></span>
                                <span class="pic-text text-right">BD1280高清国语无字</span>
                            </a>
                            <div class="stui-vodlist__detail padding-0">
                                <h4 class="title text-overflow">
                                    <a target="_blank" href="/film/index32195.html" title="<?=$item->name?>">
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