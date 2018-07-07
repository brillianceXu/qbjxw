<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>黔北酒乡网</title>
    <link rel="stylesheet" href="/Public/mobile/style/frozen.css" type="text/css" />
    <link rel="stylesheet" href="/Public/mobile/style/css.css" type="text/css" />
    <link type="text/css" href="/Public/mobile/style/font-awesome.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="/Public/mobile/js/jquery-3.1.1.min.js"></script> 
    <script type="text/javascript" src="/Public/mobile/js/xiala.js"></script><!--下拉菜单-->
    <script src="/Public/mobile/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/main.js"></script> 
    <style type="text/css">
        footer{
            padding: 10px;
        }
        .in_title li{
            width: 25%;
        }
        .in_title1 li{
            font-size: 12px;
            width: 50%;
            z-index: 1000000!important;
        }
    </style>
</head>

<body style="background-color:#fff;">
<header class="w100">
    <div class="logo fl" style="height: 54px;line-height: 54px;"><a href="/">
        <!-- <img src="/Public/static/zhanweitupian.png" style="height: 30px;width: auto;" /> -->
        <h1 style="text-align: center;font-size: 20px;">黔北酒乡网</h1>
    </a></div>
    <div class="iphone style-1">
        <div class="iphone__screen"> <a href="#" class="nav__trigger"><span class="nav__icon"></span></a>
            <nav class="nav" style="">
                <ul id="accordion" class="accordion">
                    <li>
                        <div class="link"><a href="/" style="color: white;">首页</a></i></div>
                        
                    </li>
                    <li>
                        <div class="link">白酒专供<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href="/About/index.html">推荐分类</a></li>
                            <li><a href="/About/honor.html">原浆酒</a></li>
                            <li><a href="/About/honor.html">台酿盛宴</a></li>
                            <li><a href="/About/honor.html">定制系列</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">白酒文化<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/News/index.html'>白酒历史</a></li>
                            <li><a href='/News/index.html'>白酒养生</a></li>
                            <li><a href='/News/index.html'>白酒勾兑/a></li>
                            <li><a href='/News/index.html'>白酒入药</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">酒乡动态<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/News/index.html'>行业资讯</a></li>
                            <li><a href='/News/index.html'>公司动态</a></li>
                            <li><a href='/News/index.html'>通知公示</a></li>
                            <li><a href='/News/index.html'>招聘启示</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <div class="link">白酒代理<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/Policy/industry.html'>招商合作</a></li>
                            <li><a href='/Policy/double.html'>关于我们</a></li>
                            <li><a href='/Policy/index.html'>联系方式</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- header end -->

<div id="focus" class="focus">
    <div class="hd">
        <ul>
            <li class="on"></li>
            <li class=""></li>
            <li class=""></li>
        </ul>
    </div>
    <div class="bd">
        <div class="tempWrap">
            <ul>
                <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo ($v['link']); ?>"><img hh-wh="0.55" src="<?php echo ($v['route']); ?>"></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
         </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    TouchSlide({
        slideCell:"#focus",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul",
        effect:"left",
        autoPlay:true,//自动播放
        autoPage:true, //自动分页
        switchLoad:"_src" //切换加载，真实图片路径为"_src"
    });
</script>
<!-- banner end -->

<div class=" w100">
    <h2 style="text-align: center;padding: 10px 0;"><marquee>
        <?php if(is_array($new_news)): $k = 0; $__LIST__ = $new_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><a href="/News/detail/id/<?php echo ($v['id']); ?>" style="color: red;text-decoration: underline;"><?php echo ($v['title']); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        </marquee></h2>
</div>


<!-- <div style="display: inline-block;position:fixed;float: right;top: 100px;right: 0;width: 80px;z-index: 50;padding: 0px 0;">
    <h1 style="text-align: center;background: #0000ff80;height: 50px;line-height: 25px;padding: 10px 0px;"><a href="/Park/apply.html" style="color: white;font-weight: bold;"><i class="fa fa-gg fa-2x"></i></i><br/>我要投资</a></h1>
    <h1 style="text-align: center;background: #0080008a;height: 50px;line-height: 25px;padding: 10px 0px;"><a href="/Park/build.html" style="color: white;font-weight: bold;"><i class="fa fa-product-hunt fa-2x"></i><br/>我要创业</a></h1>
</div> -->
<div class="in_enter w96 clearfix">
    <dl class="bg1">
        <dt><a href="/Park/index/cid/<?php echo ($cate[2]['child'][2]['id']); ?>"><img src="/Public/mobile/images/yq1.png" /></a></dt>
        <dd>
            <a href="/Park/index/cid/<?php echo ($cate[2]['child'][2]['id']); ?>">台酿盛宴</a>
        </dd>
    </dl>
    <dl class="bg2">
        <dt><a href="/Park/index/cid/<?php echo ($cate[2]['child'][0]['id']); ?>"><img src="/Public/mobile/images/yq2.jpg" /></a></dt>
        <dd>
            <a href="/Park/index/cid/<?php echo ($cate[2]['child'][0]['id']); ?>">原浆酒</a>
        </dd>
    </dl>
    <dl class="bg4">
        <dt><a href="/Park/index/cid/<?php echo ($cate[2]['child'][1]['id']); ?>"><img src="/Public/mobile/images/yq3.jpg" /></a></dt>
        <dd>
            <a href="/Park/index/cid/<?php echo ($cate[2]['child'][1]['id']); ?>">定制系列</a>
        </dd>
    </dl>
</div>
<div class="in_new w100">

    <ul class="in_title w96 clearfix">  
        <li><a>行业资讯</a></li>
        <li><a>公司动态</a></li>
        <li><a>通知公示</a></li>
        <li><a>招聘启示</a></li>
        
    </ul>
    <div class="in_content w100">
        <div>
            <ul class="in_con">
                <?php if(is_array($dongtai)): $i = 0; $__LIST__ = $dongtai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/News/detail/id/<?php echo ($v["id"]); ?>.html"><?php echo (mb_substr($v["title"],0,18,'utf-8')); ?>...</a><span style="float: right;">[<?php echo ($v["news_time"]); ?>]</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div>
            <ul class="in_con">
                <?php if(is_array($zhuanti)): $i = 0; $__LIST__ = $zhuanti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/News/detail/id/<?php echo ($v["id"]); ?>.html"><?php echo (mb_substr($v["title"],0,18,'utf-8')); ?>...</a><span style="float: right;">[<?php echo ($v["news_time"]); ?>]</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div>
            <ul class="in_con">
                <?php if(is_array($baodao)): $i = 0; $__LIST__ = $baodao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/News/detail/id/<?php echo ($v["id"]); ?>.html"><?php echo (mb_substr($v["title"],0,18,'utf-8')); ?>...</a><span style="float: right;">[<?php echo ($v["news_time"]); ?>]</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div>
            <ul class="in_con">
                <?php if(is_array($hangye)): $i = 0; $__LIST__ = $hangye;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/News/detail/id/<?php echo ($v["id"]); ?>.html"><?php echo (mb_substr($v["title"],0,18,'utf-8')); ?>...</a><span style="float: right;">[<?php echo ($v["news_time"]); ?>]</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        
    </div>
</div>


<!-- in_enter end -->

<div class="clear"></div>
<footer>
    <p>Copyright © 2017 贵州惠诚信息技术有限公司. All rights reserved. 黔ICP备12001935号-2</p>
</footer> 
<!-- footer end -->


<!--导航弹出层-->
<script type="text/javascript" src="/Public/mobile/js/modernizr.js"></script> 
<script type="text/javascript">
    $(function(){
        $('.nav__trigger').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('nav--active');
        });
    })
</script>
<!--导航弹出层-->
</body>
</html>