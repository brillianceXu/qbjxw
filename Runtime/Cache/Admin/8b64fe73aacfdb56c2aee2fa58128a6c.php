<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="<?php echo ($system["ico"]); ?>" />

<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/style.css" />
<link href="/Public/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title><?php echo ((isset($system["title"]) && ($system["title"] !== ""))?($system["title"]):"遵义市软件园"); ?></title>
<meta name="keywords" content="<?php echo ($system["keywords"]); ?>">
<meta name="description" content="<?php echo ($system["description"]); ?>">
<style type="text/css">  
 #preview, .img, img  
 {  
 	/*width:200px;  */
 	height:200px;  
 	width: auto;
 }  
 #preview  
 {  
	/*border:1px solid #000;  */
}
.portfoliobox{
	width: 300px;
	height: 300px;
}
.portfolio-area li .picbox{
	width: 300px;
	height: 50px;
	line-height: 110px;
}
.portfolio-area li .picbox img {
	max-width: 280px;
    max-height: 50px;
    vertical-align: middle;
}  
.portfolio-area li .checkbox {
	top: 5px;
	color: red;
}
.carrousel {
  position: fixed;
  top: 78px;
  z-index: 1000;
  width: 100%;
  height: 100%;
  background-color: rgba(10, 10, 10, 0.8);
  display: none;
  text-align: center;
  /*border: 1px solid red;*/
}
.divImg{
	position: relative;
	width: 100%;
	height: 100%;
	/*top: 120px;*/
	/*left: 2%;*/
	/*background: green;*/
}
.divVideo{
	position: relative;
	width: 100%;
	height: auto;
	top: 50px;
	left: 15%;
	background: green;
}
.video_div{
	position: relative;
	top: -20px;
	width: 100%;
	height: 100%;
}
.carrousel img {
	position: relative;
	top: 20px;
	/*width: 100%;*/
	height: 85%;
	width: auto;
}
.close {
  /*cursor: pointer;*/
  float: right;
  font-size: bold;
  position: fixed;
  top: 78px;
  right: 0px;
  font-size: 18px;
  color: black;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  /*border-radius: 50%;*/
  background: white;
  z-index: 1000000;
}
/*.close:hover {
  font-size: 20px;
  color: #DDD;
}*/
.botton_des{
	float: left;
	position: relative;
	top: 20px;
	width: 100%;
	height: 40px;
	line-height: 40px;
	color: white;
	/*background: green;*/
  	z-index: 1000000;
  	/*border: 2px solid red;*/
}
#form-tuijian-add .row{
	margin-top: 70px;
}
/*#edui1_toolbarbox{
	z-index: 1000000;
}*/
 
 </style> 
</head>
<body>

<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/admin"><?php echo ($system["title"]); ?></a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">后台</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="/Admin/Content/article_add.html" ><i class="Hui-iconfont">&#xe616;</i> 新闻</a></li>
							<li><a href="/Admin/Content/policy_add.html" ><i class="Hui-iconfont">&#xe613;</i> 产品</a></li>
							<!-- <li><a href="/Category/category_add.html" ><i class="Hui-iconfont">&#xe620;</i> 分类</a></li> -->
							<li><a href="/Admin/Manager/admin_add.html" ><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
					<li><a href="/" target="_blank" title="消息">网站首页</a></li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					
					<li style="font-family: '楷体';"><?php if($_SESSION['usermsg']['roleid']== 1): ?>超级管理员<?php else: ?>普通管理员<?php endif; ?></li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($_SESSION['usermsg']['username']); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="/Admin/Manager/admin_edit.html">个人信息</a></li>
							<li><a href="/Admin/Manager/password_edit.html">修改密码</a></li>
							<li><a href="javascript:;" onclick="window.location.href='/Admin/Base/out_login';">退出</a></li>
						</ul>
					</li>
					
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>




<aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt <?php if($controller_name == 'Content'): ?>class="selected" style="background:#5A98DE;color:white;"<?php endif; ?>><i class="Hui-iconfont">&#xe616;</i> 文章管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd <?php if($controller_name == 'Content'): ?>style="display:block;"<?php endif; ?>>
                <ul>
                    <li ><a href="/Admin/Content/index/pid/2.html" data-title="酒乡动态" <?php if(($controller_name == 'Content') and ($action_name == 'index')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>酒乡动态</a></li>
                    <li ><a href="/Admin/Content/index/pid/1.html" data-title="白酒文化" <?php if(($controller_name == 'Content') and ($action_name == 'culture')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>白酒文化</a></li>
                    <li ><a href="/Admin/Content/index/pid/3.html" data-title="关于我们" <?php if(($controller_name == 'Content') and ($action_name == 'about')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>关于我们</a></li>
                    <li><a href="/Admin/Category/category_list/type/2.html" data-title="文章分类" href="javascript:void(0)" <?php if(($controller_name == 'Content') and ($action_name == 'category_list')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>文章分类</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-System">
            <dt  <?php if($controller_name == 'Goods'): ?>class="selected" style="background:#5A98DE;color:white;"<?php endif; ?>><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd <?php if($controller_name == 'Goods'): ?>style="display:block;"<?php endif; ?>>
                <ul>
                    <li><a href="/Admin/Goods/index.html" data-title="产品列表" href="javascript:void(0)" <?php if(($controller_name == 'Goods') and ($action_name == 'index')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>产品列表</a></li>
                    <li><a href="/Admin/Category/category_list/type/1.html" data-title="产品分类" href="javascript:void(0)" <?php if(($controller_name == 'Goods') and ($action_name == 'category_list')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>产品分类</a></li>
                    
                </ul>
            </dd>
        </dl>   
        <dl id="menu-System">
            <dt  <?php if($controller_name == 'Banner'): ?>class="selected" style="background:#5A98DE;color:white;"<?php endif; ?>><i class="Hui-iconfont">&#xe612;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd <?php if($controller_name == 'Banner'): ?>style="display:block;"<?php endif; ?>>
                <ul>
                    <li><a href="/Admin/Banner/index.html" data-title="Banner" href="javascript:void(0)" <?php if(($controller_name == 'Banner') and ($action_name == 'index')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>Banner</a></li>
                    <!-- <li><a href="/Admin/Banner/company.html" data-title="合作企业" href="javascript:void(0)" <?php if(($controller_name == 'Banner') and ($action_name == 'company')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>合作企业</a></li> -->
					<!-- <li><a href="/Admin/Banner/honor.html" data-title="荣誉资质" href="javascript:void(0)" <?php if(($controller_name == 'Banner') and ($action_name == 'honor')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>荣誉资质</a></li> -->
                </ul>
            </dd>
        </dl>
        
        <?php if($_SESSION['usermsg']['roleid']== '2'): else: ?>
        <dl id="menu-System">
            <dt <?php if($controller_name == 'Manager'): ?>class="selected" style="background:#5A98DE;color:white;"<?php endif; ?>><i class="Hui-iconfont">&#xe62d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd <?php if($controller_name == 'Manager'): ?>style="display:block;"<?php endif; ?>>
                <ul>
                    <li><a href="/Admin/Manager/index" data-title="管理员" href="javascript:void(0)" <?php if(($controller_name == 'Manager') and ($action_name == 'index')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>管理员</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-system">
            <dt <?php if($controller_name == 'System'): ?>class="selected" style="background:#5A98DE;color:white;"<?php endif; ?>><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd <?php if($controller_name == 'System'): ?>style="display:block;"<?php endif; ?>>
                <ul>
                    <li><a href="/Admin/System/index" data-title="系统设置" href="javascript:void(0)" <?php if(($controller_name == 'System') and ($action_name == 'index')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>系统设置</a></li>
                    <li><a href="/Admin/System/link.html" data-title="友情链接" href="javascript:void(0)" <?php if(($controller_name == 'System') and ($action_name == 'link')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>友情链接</a></li>
                    <li><a href="/Admin/System/system_log.html" data-title="系统日志" href="javascript:void(0)" <?php if(($controller_name == 'System') and ($action_name == 'system_log')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>系统日志</a></li>
                    <li><a href="/Admin/System/views.html" data-title="系统日志" href="javascript:void(0)" <?php if(($controller_name == 'System') and ($action_name == 'views')): ?>style="font-weight:bold;font-style: italic;"<?php endif; ?>>访问记录</a></li>
                </ul>
            </dd>
        </dl><?php endif; ?>
    </div>
</aside>



<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			

			
	<style type="text/css">
		.Hui-article-box ,.Hui-aside{
			top: 56px;
		}
	</style>
<link href="/Public/static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品详情</nav>
<div class="page-container">
	<div class="panel panel-default" style="width: 846px;">
                <!-- <div class="panel-heading"><h3 class="panel-title"><?php echo ($mess["title"]); ?></h3></div> -->

                <div class="panel-body" style="border: 1px solid #ddd;margin: 10px;">
                    <ul class="list-group col-sm-7">
                        <li class="list-group-item" style="border: 0px;"><h3>53°经典台酿盛宴珍品 台酿盛宴酱香型</h3></li>
                        <li class="list-group-item" style="border: 0px;"><i class="fa fa-calendar"></i> 中国酒都　　贵州茅台 酱香型</li>
                        <li class="list-group-item" style="border: 0px;"><i class="fa fa-calendar"></i> 香型:酱香型</li>
                        <li class="list-group-item" style="border: 0px;"><i class="fa fa-calendar"></i> 产地: 贵州茅台镇</li>
                        <li class="list-group-item" style="border: 0px;"><i class="fa fa-calendar"></i> 适用场景: 商务宴请区</li>
                        <li class="list-group-item" style="border: 0px;"><i class="fa fa-calendar"></i> 促销价:<span style="color: red;">￥399.00</span> </li>
                        <!-- <li class="list-group-item">
                            <button type='button' class="btn btn-success" onclick='$("#applyForm").modal("show")' style="margin: 10px;">加入购物车</button>
                            <a href="javascript:;" class="btn btn-danger" style="margin: 10px;" onclick="alert('请拨打电话15185268710进行报名！');">电话报名</a>
                            <a href="" class="btn btn-primary" style="margin: 10px;" onclick="">微信报名</a>
                            <span  class="badge" style="width: 100px;height: 100px;"><img src="https://baike.baidu.com/pic/%E4%BA%8C%E7%BB%B4%E7%A0%81/2385673/0/2934349b033b5bb571dc8c5133d3d539b600bc12?fr=lemma&ct=single#aid=0&pic=2934349b033b5bb571dc8c5133d3d539b600bc12" style="width: 100%;height: auto;display: block;"></span>
                        </li> -->
                    </ul>
                    <div class="col-sm-5">
                        <img src="http://13795561.s21i-13.faiusr.com/2/ABUIABACGAAgpYv8yAUoyfb9CDCABTiABQ.jpg" style="height: 300px;">
                    </div>
                    
                </div>	
                <div class="panel-body">
            <div class="wenzhang" style="min-height:400px;margin-top: 10px;"><span style="font-size: 18px">　　<strong>一、搭乘大数据时代的&quot;互联网+&quot;，茅台云商战略落地实施</strong><br />
&nbsp;<br />
　　&quot;在&#39;互联网+&#39;的风口上顺势而为，会使中国经济飞起来。&quot;这是李克强总理对中国&quot;互联网+&quot;经济的描述。在供给侧结构性改革热议的当下，借助于贵州风生水起的大数据产业，茅台集团将改革目标瞄准了大数据时代下的&quot;互联网+&quot;经济，以期依托互联网，通过大数据的收集、分析、整理，及时了解消费者的需求，在保证产品质量的前提下，提升顾客满意度，整合产业优质资源，推动传统营销模式的转型和发展。<br />
<br />
　　实际上，鉴于持续低迷的白酒行业形势倒逼，茅台集团主动顺应消费者习惯，调整产品结构转型转变，试水网络营销模式在2010年就开始了。2012年，茅台从线上渠道开发市场，进行渠道变革，在京东、天猫、1号店、国美等网站开设茅台官方旗舰店，运作至今，电商业务已实现过亿销售收入。2014年，作为茅台集团在电商领域的深度探索，电商公司汇聚品牌、渠道、技术、物流等众多优质资源，在移动互联网浪潮中应运而生。<br />
<br />
　　而作为茅台集团迎接&quot;互联网+&quot;的核心战略举措，引领茅台营销转型的电商公司一号工程--物联网云商平台战略于2015年出炉。<br />
<br />
　　这是互联网时代茅台集团最大限度的依托大数据、物联网、云技术，充分整合茅台集团线上线下资源，发挥自身品牌优势，制定行业标准，构建&quot;互联网+&quot;新生态的一局大棋。<br />
&nbsp;<br />
　　<strong>二、依托开放性综合服务平台，茅台云商打造新生态</strong><br />
&nbsp;<br />
　　&quot;茅台云商的业务模式，简单说来就是打造建立一个平台，上游是茅台集团各子公司资源，中游是物流公司、线下专卖店（经销商）体系，下游面对消费者。&quot;电商公司副总经理聂永说，这样一个集子公司、经销商、消费者于一体的开放性综合服务平台，将O2O、B2C、B2B和C2B等模式汇集于其中，是茅台在互联网时代为消费者、经销商以及集团自身精心打造的新和谐商业生态圈。<br />
<br />
　　作为国内首个B2B、O2O、P2P一体化云平台，云商平台包括茅台云商城、云分销、云营销、物联网防伪溯源等系统。其运作分前端、中端和后台三个板块。消费者通过电脑、手机等移动终端在云商城实现商品的购买、网点配送与货物追踪。经销商通过云分销处理和厂家的购销业务、与物流商的配送、与消费者完成交易，运用中间层的云商管理系统实现对消费者及商品的精准化营销与精细化管理。茅台酒销售公司、酱香酒公司以及其他集团子公司将产品在云商城展示，运用云营销接收订单并分配到就近的经销商进行配送服务。作为云商平台唯一的官方线上营运商，电商公司为云商平台提供技术支持，与消费者产生互动，提供售前、售中、售后服务。而后台的大数据分析系统、财务金融管理系统则为云商平台提供强大的技术支撑，实现对交易数据、运营统计、门店经营等数据的采集、管理和应用。表面上，子公司、经销商、消费者、电商公司四个层面通过不同的系统各司其职，实则通过云商一体化平台环环相扣，紧密相连，实现共赢。<br />
<br />
　　&quot;茅台云商战略，旨在寻求行业转型新模式，盘活现有资源，发掘新的市场空间，打造一个依靠B2B、B2C引流，拓展O2O模式，帮助经销商卖酒。做好渠道转型，逐步定位经销商为物流配送服务网点。大力推行以消费者发起仲裁，迎合个性化消费的C2B模式。我们搭台，大家来唱戏。&quot;聂永表示，通过茅台云商这个一体化平台，茅台能有效加强渠道控制力，提升会员购物体验并增强消费者、经销商与茅台之间的黏性。与此同时，茅台云商平台具有的社会化营销、物联网融合、会员服务三大功能，可以帮助经销商拓展圈子、完成销量，为消费者提供更加完善的服务，解决消费者真伪顾虑，提高线上转化率。<br />
<br />
　　构建如此庞大细腻的营销网络，行业专家为茅台云商把脉支招。价格市场化、营销互动社区化、配送社会化、服务人性化、交易安全化、营销精准化将成为影响茅台云商战略能否顺利推进的关键环节。为此，云商战略将从平台建设、渠道管理、防伪溯源、宣传推广、产品线结构以及线上线下整合等方面分阶段、分层次推进。<br />
<br />
　　第一阶段的茅台云商系统已经基本构建完成，正在进一步优化完善之中。以北京、贵阳、郑州、遵义、仁怀五大城市展开的试点工作收获了不错的反响。现阶段面向全国的经销商资格认证工作正在逐步推进，面向消费者的宣传工作已启动。<br />
<br />
　　&quot;大茅台云商平台是我们第二阶段的工作。这一阶段的重点是重塑品牌形象，改造营销体制，实现O2O模式。第三阶段则是通过茅台云商平台，完成营销转型，实现大数据营销。集团公司给电商公司定下的目标是预计在2018年实现平台交易额超过200亿元，销售收入超过7亿元，推动茅台电商3年内独立上市，茅台云商潜力巨大。&quot;聂永表示。<br />
&nbsp;<br />
　　<strong>三、以智营销，茅台云商为您打造智能生活</strong><br />
&nbsp;<br />
　　茅台集团高度重视大数据时代下的&quot;互联网+&quot;经济发展，顺势提出&quot;智慧营销&quot;，将其丰富到&quot;八大营销&quot;理念中，形成&quot;九大营销&quot;的体系格局，一并纳入了&quot;十三五&quot;发展的战略规划体系。<br />
<br />
　　集团公司董事长、党委副书记、股份公司董事长袁仁国就曾公开表示，&quot;互联网的未来在于定制和共享，我们要依托互联网、大数据、云技术以及线下渠道资源，打造&quot;云商+互联网&quot;平台，增加茅台、商家与消费者之间的互动，实现销售渠道扁平化，建好线上线下的和谐新商业生态。&quot;集团公司党委书记、副董事长、总经理李保芳也在调研电商公司时强调，&quot;要以更包容的心态，更开放的胸怀融入大数据时代，探索和创新符合时代潮流的发展模式，把电商公司打造成为顺应时代发展潮流的、开放的、与茅台品牌相适应的新平台。&quot;<br />
<br />
　　集&quot;互联网+&quot;、大数据、物联网于一身的云商战略承载了茅台营销调整转型的使命。集团公司的高度重视，让云商平台的发展步入快车道。毫无疑问，云商战略的成功实施将完成传统品牌与互联网的充分融合升级，对经销商、消费者、茅台自身和整个白酒行业产生一系列积极影响。<br />
<br />
　　对茅台：云商战略有助于构建大数据分析机制，完善渠道建设，助推渠道营销能力，实现真正的以市场为中心的垂直营销战略，构建未来的利润增长点。而依靠云商平台指导集团各业务的资源投放量，对于整合集团内部资源，实现精细化管理，解决发展面临的内部问题大有裨益。此外云商平台拉近了经销商、消费者与茅台的距离，降低了沟通成本，重构了酒与社会、酒与消费者之间的关系。<br />
<br />
　　对经销商和专卖店：加入云商平台体系后，经销商和专卖店可以随时便捷获知公司的最新情况，了解业务进展情况，甚至于是否开票、发货都能一目了然。此外经销商还能免费使用进销存、协同、ERP、CRM等系统，既节约成本，又能打通信息梗阻。此外，经销商可以借助云商平台科学制定、管理进货销售等业务，坐享云商平台的数据资源，扩大客源。而云商平台的官方身份也为经销商多一重品牌背书。<br />
<br />
　　也正因为如此，北京茅台经销商协会会长、北京德华永胜商贸有限公司总经理李迪平给予了云商战略高度评价：&quot;电商本身的竞争非常残酷，不是人人都适合做电商。但借助于茅台云商这样的体系，却能让地区经销商极好地紧跟时代脉搏。&quot;在他看来，传统经销商正处于发展触及瓶颈、难以扩大市场份额的困境中，借助于茅台云商平台经销商能用最小的成本实现企业的互联网化，让传统经销商抱紧茅台大树突破眼下困局。<br />
<br />
　　对消费者：建成之后的云商平台将会带给消费者带来前所未有的购物体验，既享受网上购物便利，又获得官方平台的信用保证。云商平台增加了茅台和消费者之间的互动，依托云商平台先进的信息系统，消费者无需排队便可方便地付款，商品配送效率、售后服务品质也将显著提升。<br />
<br />
　　对白酒行业：茅台云商强化了电商新模式与传统酒业的融合，让酒企和电商相互平衡找到一个结合点，为酒企自建平台发展开创了新路，也创造了合作共赢的营销新模式，这给艰难发展中的整个白酒行业带来希望。作为行业领头羊的茅台集团，也用自己的实际行动告诉业界同仁，瞬息万变的信息化时代不变则弊，变则通达，只有勇敢面对发展中的困难和挑战，不断探索新的模式，才能催生白酒市场新的活力。<br />
<br />
　　可以想象，建成后的云商平台，将是一个服务于集团、经销商、消费者，形成包括茅台产品、粉丝产品的产品交易、收藏拍卖、溯源防伪、会员服务的电商交易平台。消费者可以通过APP提供议价购买、就近服务配送、防伪验真、云商专属优品、酒友圈分享、私人酒窖等多元化服务。与此同时，云商城还开设茅台文化、酒之博览、品鉴收藏、茅台圆梦会等频道，为消费者提供更多贴心的会员服务。而经销商、专卖店、服务商使用云分销，可实现手机进货、零成本采购、库存管理、订单处理、在线实时信息沟通等便捷化管理。随时掌握门店信息，及时调配资源，建立商品、服务与消费者之间的有效连接&hellip;&hellip;云商平台强大的功能性里，透着浓浓的人情味儿。<br />
<br />
　　这样的生活场景将是茅台致力打造的智慧营销的一隅，是茅台为消费者和经销商创造的智能生活的一幕，也是茅台努力构建的多元、开放、融合的新型经济生态圈。<br />
<br />
　　创新之路漫漫且修远，茅台热衷于求索从未止步！</span>
                <br />
                <div class="clear"></div>
            </div>
                </div>


</div>
<script type="text/javascript">
function datadel(){
	var del_ids=$("input[name=del_ids]").val();
	alert(del_ids);
}
function article_del(id){
	layer.confirm("确定要删除吗？",function(){
		$.get("/Admin/Content/del_article",{id:id},function(msg){
			if(msg == 200){
				layer.msg('已删除!',{icon: 5,time:1000},function(){
					window.location.reload();
				});
			}else{
				layer.msg('删除失败!');
			}
		});
	});
}
</script>


			
				<footer class="footer mt-20">
	<div class="container">
		<p>
			<?php echo ($system["copyright"]); ?><br>
			<?php echo ($system["icp"]); ?>
		</p>
	</div>
</footer>


			

		</div>
	</div>
</section>

<script type="text/javascript" src="/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/admin/lib/webuploader/0.1.5/webuploader.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 

<!-- <script type="text/javascript" src="__PUBLIC/admin/lib/lightbox2/2.8.1/js/lightbox-plus-jquery.min.js"></script>  -->
<script type="text/javascript">

	var ue = UE.getEditor('editor');

// 单图上传预览
function preview(file)  
{  
	var prevDiv = document.getElementById('preview');  
	prevDiv.style.display="block";
	if (file.files && file.files[0])  
	{  
		var reader = new FileReader();  
		reader.onload = function(evt){  
			prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';  
		}    
	 	reader.readAsDataURL(file.files[0]);  
	}  
	else    
	{  
	 	prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
	}  
 }  
//下面用于多图片上传预览功能

    function setImagePreviews(avalue) {

        var docObj = document.getElementById("doc");

        var dd = document.getElementById("dd");

        dd.innerHTML = "";

        var fileList = docObj.files;

        for (var i = 0; i < fileList.length; i++) {            



            dd.innerHTML += "<div style='float:left;height:200px;margin-top:50px;' > <img id='img" + i + "'  /> </div>";

            var imgObjPreview = document.getElementById("img"+i); 

            if (docObj.files && docObj.files[i]) {

                //火狐下，直接设img属性

                imgObjPreview.style.display = 'block';

                imgObjPreview.style.width = '250px';

                imgObjPreview.style.height = '150px';

                //imgObjPreview.src = docObj.files[0].getAsDataURL();

                //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式

                imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);

            }

            else {

                //IE下，使用滤镜

                docObj.select();

                var imgSrc = document.selection.createRange().text;

                alert(imgSrc)

                var localImagId = document.getElementById("img" + i);

                //必须设置初始大小

                localImagId.style.width = "150px";

                localImagId.style.height = "180px";

                //图片异常的捕捉，防止用户修改后缀来伪造图片

                try {

                    localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";

                    localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;

                }

                catch (e) {

                    alert("您上传的图片格式不正确，请重新选择!");

                    return false;

                }

                imgObjPreview.style.display = 'none';

                document.selection.empty();

            }

        }  



        return true;

    }
    $(function(){
	$.Huihover(".portfolio-area li");
});
</script>
</body>
</html>