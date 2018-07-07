<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>遵义市软件园</title>
    <link rel="stylesheet" href="/Public/mobile/style/frozen.css" type="text/css" />
    <link rel="stylesheet" href="/Public/mobile/style/css.css" type="text/css" />
    <link type="text/css" href="/Public/mobile/style/font-awesome.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="/Public/mobile/js/jquery-3.1.1.min.js"></script> 
    <script type="text/javascript" src="/Public/mobile/js/xiala.js"></script><!--下拉菜单-->
    <script src="/Public/mobile/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/main.js"></script> 
    <style type="text/css">
        .mgs_about p img {
            width: 100% !important;
            height: auto !important;
        }
        .in_title1 li {
            font-size: 12px;
            width: 16.555555555%;
            z-index: 1000000!important;
        }
        .in_new,.in_new .in_title ,.in_new .in_title  a {
            z-index: 1000000!important;
        }
    </style>
</head>

<body style="background-color:#fff;">
<header class="w100">
    <div class="logo fl" style="height: 54px;line-height: 54px;"><a href="/"><img src="/Public/static/zhanweitupian.png" style="height: 30px;width: auto;" /></a></div>
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



<div class="two_xiala">
    <ul id="accordion1" class="accordion1">
        <li>
            <div class="link">荣誉资质</div>
           <!--  <ul class="submenu" style="display: ;">
                <li><a href="#">企业简介</a></li>
                <li><a href="#">企业简介</a></li>
                <li><a href="#">企业简介</a></li>
                <li><a href="#">企业简介</a></li>
            </ul> -->
        </li>
    </ul>

</div>
<!-- two_xiala end -->


<div class="mgs_leader">

    <div class="mgs_leader_con clearfix">
        <?php if(is_array($mess)): $i = 0; $__LIST__ = $mess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dl class=" tc fl">
            <dt><img src="<?php echo ($v["route"]); ?>" style="height: 100px;" /></dt>
            <dd>
                <!-- <h3>张  逵 </h3> -->
                <p><?php echo ($v["name"]); ?></p>
            </dd>
        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    
        </dl>
    </div>
</div>
<div class="clear"></div>
<div class="fixed_bottom w100 clearfix" style="background: #bbb">
    <ul class="in_title1 w96 clearfix">
        <li ><a href="/About/index.html">园区介绍</a></li>
        <li ><a href="/About/leaders.html">领导班子</a></li>
        <li><a href="/About/organization.html">组织机构</a></li>
        <li><a href="/About/history.html">发展历程</a></li>
        <li class="current"><a href="/About/honor.html">荣誉资质</a></li>
        <li><a href="/About/culture.html">企业文化</a></li>
        
    </ul>
</div>
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