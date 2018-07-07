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
                        <div class="link">园区简介<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href="/About/index.html">园区介绍</a></li>
                            <li><a href="/About/leaders.html">领导班子</a></li>
                            <li><a href="/About/organization.html">组织机构</a></li>
                            <li><a href="/About/history.html">发展历程</a></li>
                            <li><a href="/About/honor.html">荣誉资质</a></li>
                            <li><a href="/About/culture.html">企业文化</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">新闻中心<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/News/index.html'>园区要闻</a></li>
                            <li><a href='/News/index.html'>园区动态</a></li>
                            <li><a href='/News/index.html'>专题</a></li>
                            <li><a href='/News/index.html'>媒体报道</a></li>
                            <li><a href='/News/index.html'>行业信息</a></li>
                            <li><a href='/News/video.html'>视频新闻</a></li>
                        </ul>
                    </li>
                   <!--  <li>
                        <div class="link">产品看台<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href="#">公司简介</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <div class="link">园区服务<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/Service/index.html'>IT技术服务</a></li>
                            <li><a href='/Service/index.html'>人力资源服务</a></li>
                            <li><a href='/Service/index.html'>企业孵化服务</a></li>
                            <li><a href='/Service/index.html'>投资融资服务</a></li>
                            <li><a href='/Service/index.html'>运营管理服务</a></li>
                            <li><a href='/Service/index.html'>生活配套服务</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">创新创业<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/Policy/industry.html'>主导产业</a></li>
                            <li><a href='/Policy/double.html'>双创政策</a></li>
                            <li><a href='/Policy/index.html'>产业政策</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">千人计划<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/Hpe/index.html'>项目介绍</a></li>
                            <li><a href='/Hpe/policy.html'>培训政策</a></li>
                            <li><a href='/Hpe/java.html'>课程介绍</a></li>
                            <li><a href="http://mp.weixin.qq.com/s/0QZA3QqZY-VQEecoYgfQIA" target="_blank">交通住宿</a></li>
                            <li><a href="http://event.3188.la/646339072/SingleTicket/646339113?guid=dfe53ec1-6026-4888-bcca-5bccf3c450f5&ticketInfos=%5b%7b%22TicketId%22%3a%22646339114%22%2c%22Number%22%3a%221%22%2c%22Code%22%3a%22%22%7d%5d&isShowContactInfo=False" target="blank">我要报名</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">投资促进<i class="fa fa-angle-down"></i></div>
                        <ul class="submenu">
                            <li><a href='/Invest/index.html'>政策优惠</a></li>
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
            <div class="link">新闻中心</div>
        </li>
    </ul>

</div>
<!-- two_xiala end -->

<ul class="mgs_new">
    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/News/detail/id/<?php echo ($v["id"]); ?>.html"><?php echo (mb_substr($v["title"],0,15,'utf-8')); ?>...</a><span style="float: right;"><?php echo ($v["news_time"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php if($total == '0'): ?><h2 style="text-align: center;margin: 10px 0">没有相关文章</h2>
    <?php else: ?>
<div class="page_mgs">

    <?php if($page == '1'): else: ?>
        <a href="/News/index/<?php echo ($str); ?>/page/1.html">首页</a>&nbsp;&nbsp;
        <a href="/News/index/<?php echo ($str); ?>/page/<?php echo ($page-1); ?>.html">上一页</a>&nbsp;&nbsp;<?php endif; ?>
    <a class="active"><?php echo ($page); ?></a>&nbsp;&nbsp;
    <?php if($page == $total): else: ?>
        <a href="/News/index/<?php echo ($str); ?>/page/<?php echo ($page+1); ?>.html">下一页</a>&nbsp;&nbsp;
        <a href="/News/index/<?php echo ($str); ?>/page/<?php echo ($total); ?>.html">尾页</a>&nbsp;&nbsp;<?php endif; ?>
    <a class="none"><?php echo ($count); ?>条/<?php echo ($total); ?>页</a>
    <!-- <a><input type="text" /></a> -->
    <!-- <a>GO</a> -->
</div><?php endif; ?>
<!-- fenye end -->

<div class="clear"></div>
<div class="fixed_bottom w100 clearfix" style="background: #bbb">
    <ul class="in_title1 w96 clearfix">
        <?php if(is_array($cate[1]['child'])): $i = 0; $__LIST__ = $cate[1]['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li  <?php if($v["id"] == $cid): ?>class="current"<?php endif; ?>><a href="/News/index/cid/<?php echo ($v["id"]); ?>.html"><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="/News/video.html">视频新闻</a></li>
        
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