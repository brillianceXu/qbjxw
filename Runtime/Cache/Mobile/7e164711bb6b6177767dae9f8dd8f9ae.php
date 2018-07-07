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
        .in_title li  {
            font-size: 12px;
            width: 32.333333%;
            z-index: 1000000!important;
            border: 1px #CDCDCD solid;
        }
        .in_title2 li{
            width:20%;
        }
        .in_new,.in_new .in_title ,.in_new .in_title  a {
            z-index: 1000000!important;
        }
        table td{
            padding: 10px 0px;
        }
        .in_enter dl{
            width: 47%;
            margin: 10px 0px;
        }
        .in_enter dl dd{
            top: 77px;
            position: static;
        }
        .in_enter dl dd a{
            color: black;
            font-weight: bold;
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
            <div class="link">千人计划</div>
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



<div class="in_new w100">
    <ul class="in_title w96 clearfix" style="margin-bottom: 5px;">
        <li style="font-size: 14px;"><a>项目介绍</a></li>
        <li style="font-size: 14px;"><a>课程介绍</a></li>
        <li style="font-size: 14px;"><a>新闻中心</a></li>
        
    </ul>
    <div class="in_content w100">
        <div>
            <ul class="in_con">
                <li style="height: auto;list-style-type:none;padding-left: 0px;"><img src="http://www.zunyisp.org/Public/app/hpe/img/project-intro.jpg" width="100%"/></li>
                <li style="height: auto;list-style-type:none;padding-left: 0px;"><a href="#">遵义市政府p与HPE中国达成战略合作意向，启动大数据千人培养项目，遵义市软件园与HPE大学强强联合，以世界500强职业标准制定大数据千人培养计划。依托遵义市本地的产业优势及人才政策，结合HPE大学在人才培养方面的品牌优势、丰富的课程和国际认证体系、出色的师资队伍和专业的市场化运营管理经验，并充分利用遵义本地院校及相关合作院校的办学能力和优势教学资源，开展政校企合作，共同建立全方位、高层次、可持续发展的大数据产业人才培养与输送机制，打通产学研最后一公里，打造大数据产业人才战略高地，助推遵义大数据新兴产业升级发展。</a></li>
            </ul>
        </div>
        <div class="in_enter w96 clearfix">
                <dl class="bg1">
                    <dt><img src="http://www.zunyisp.org/Public/app/hpe/img/course1.jpg"></dt>
                    <dd>
                        <a href="/Hpe/java">JAVA</a>
                    </dd>
                </dl>
                <dl class="bg2">
                    <dt><img src="http://www.zunyisp.org/Public/app/hpe/img/course2.jpg"></dt>
                    <dd>
                        <a href="/Hpe/java">软件测试</a>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><img src="http://www.zunyisp.org/Public/app/hpe/img/course3.jpg"></dt>
                    <dd>
                        <a href="/Hpe/java">大数据</a>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><img src="http://www.zunyisp.org/Public/app/hpe/img/course4.jpg"></dt>
                    <dd>
                        <a href="/Hpe/java">WEB前端</a>
                    </dd>
                </dl>
        </div>
        <div>
            <ul class="in_con">
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484081&idx=1&sn=d4c798059a19bfc8d03787599b4f8455&scene=19#wechat_redirect" title="大数据千人培养项目在遵义启动" target="_blank">
                    <span class="num"></span>大数据千人培养项目在遵义启动
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484114&idx=1&sn=bc2bbe78f0078c52ed357f96890bcdab&scene=19#wechat_redirect" title="人才驱动发展——人才培养模式3.0遵义模式" target="_blank"><span class="num"></span>人才驱动发展——人才培养模式3.0遵义模式
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484122&idx=1&sn=6a9d6fe0948f77bea4d57db82137e149&scene=19#wechat_redirect" title="遵义大数据千人培养计划学员正式签约" target="_blank"><span class="num"></span>遵义大数据千人培养计划学员正式签约
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484132&idx=1&sn=a60b2162f8d3c567d80badceda6bbb25&scene=19#wechat_redirect" title="遵义·HPE战略合作签约暨项目启动仪式在遵义举行" target="_blank"><span class="num"></span>遵义·HPE战略合作签约暨项目启动仪式在遵义举行
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484150&idx=1&sn=12bc541a232aab6be04ed6051858dc3b&scene=19#wechat_redirect" title="遵义大数据千人计划丨项目广受媒体关注，学员报名火热进行中" target="_blank">
                    <span class="num"></span>遵义大数据千人计划丨项目广受媒体关注，学员报名火热进行中
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484191&idx=1&sn=19aa83cdb297e98db331fd4368082adc&scene=19#wechat_redirect" title="遵义大数据千人培养计划（第一期）开学典礼隆重举行" target="_blank"><span class="num"></span>遵义大数据千人培养计划（第一期）开学典礼隆重举行
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484211&idx=1&sn=9f528bf28cb8948f4f1aeacedc988215&scene=19#wechat_redirect" title="国务院第四次大督查走进遵义市大学生创新创业园" target="_blank"><span class="num"></span>国务院第四次大督查走进遵义市大学生创新创业园
                    </a>
                </li>
                <li class="news-title">
                    <a href="" title="HPE大学CCNA网络技术实践培训(重庆专场)顺利举办" target="_blank"><span class="num"></span>HPE大学CCNA网络技术实践培训(重庆专场)顺利举办
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484180&idx=1&sn=3660d6b23fed866621d9c7757f54a234&scene=19#wechat_redirect" title="千人计划丨生活指南" target="_blank">
                    <span class="num"></span>千人计划丨生活指南
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484172&idx=1&sn=9901e8a56e0cf1dd98ed61fc050cd160&scene=19#wechat_redirect" title="校友风采丨他们与慧与共成长" target="_blank"><span class="num"></span>校友风采丨他们与慧与共成长
                    </a>
                </li>
                <li class="news-title">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzIyNzM3OTE5OQ==&mid=2247484217&idx=1&sn=7ec8adfb77782ed1b4327be19caddc73&scene=19#wechat_redirect" title="校友风采丨激情七月，求识筑梦" target="_blank"><span class="num"></span>校友风采丨激情七月，求识筑梦
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="clear"></div>
<div class="fixed_bottom w100 clearfix" style="background: #bbb">
    <ul class="in_title2 w96 clearfix">
        <li class="current"><a href="/Hpe/index/cid/<?php echo ($v["id"]); ?>.html">项目介绍</a></li>
        <li><a href="/Hpe/policy/cid/<?php echo ($v["id"]); ?>.html">培训政策</a></li>
        <li><a href="/Hpe/java/cid/<?php echo ($v["id"]); ?>.html">课程介绍</a></li>
        <li><a href="http://mp.weixin.qq.com/s/0QZA3QqZY-VQEecoYgfQIA" target="_blank">交通住宿</a></li>
        <li><a href="http://event.3188.la/646339072/SingleTicket/646339113?guid=dfe53ec1-6026-4888-bcca-5bccf3c450f5&ticketInfos=%5b%7b%22TicketId%22%3a%22646339114%22%2c%22Number%22%3a%221%22%2c%22Code%22%3a%22%22%7d%5d&isShowContactInfo=False" target="blank">我要报名</a></li>
        
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