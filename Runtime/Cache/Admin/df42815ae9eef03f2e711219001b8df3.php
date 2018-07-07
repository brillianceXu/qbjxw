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
			

			
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 友情链接 </nav>
<div class="page-container" style="padding-top: 0px;">
	<?php if($pid == 1): else: ?>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
		<!-- <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> &nbsp;&nbsp; -->
		<a class="btn btn-primary radius" href="/Admin/System/link_add.html"><i class="Hui-iconfont">&#xe600;</i> 添加</a></span> <span class="r">共有链接：<strong><?php echo ($count); ?></strong> 条</span> </div><?php endif; ?>
	<div>
		<table class="table table-border table-bordered table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="70">ID</th>
					<!-- <th width="80">排序</th> -->
					<th>网站名称</th>
					<th>网址</th>
					<th>状态</th>
					<th width="100">操作</th>
					
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="text-c">
				
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo ($v["id"]); ?></td>
					<!-- <td><input type="text" class="input-text text-c" value="1"></td> -->
					<!-- <td><img src="temp/brand/dongpeng.jpeg"></td> -->
					<td class="text-c"> <?php echo ($v["sitename"]); ?></td>
					<td class="text-c"><?php echo ($v["link"]); ?></td>
					<td class="text-c"><?php if($v["status"] == 1): ?>启用<?php else: ?>停用<?php endif; ?></td>
					<td class="f-14 product-brand-manage">
						<a style="text-decoration:none" href="/Admin/System/link_add/id/<?php echo ($v["id"]); ?>.html" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> 
						<a style="text-decoration:none" class="ml-5" onClick="active_del(<?php echo ($v["id"]); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
function active_del(id){
	layer.confirm('确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$.get("/Admin/System/del_link",{id:id},function(msg){
			if(msg == '200'){
				layer.msg('已删除!',{icon: 5,time:1000},function(){
					location.reload();
				});
			}else{
				layer.msg("删除失败");
			}
		});
		
	});
	
}
// function active_del(id){
// 	window.location.href="/Admin/System/del_link/id/"+id;
// }
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