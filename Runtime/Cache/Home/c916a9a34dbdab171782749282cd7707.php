<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="zh-CN">
    <title><?php echo ($system["title"]); ?></title>
    <meta name="keywords" content="茅台，贵州茅台集团，茅台酒厂">
    <meta name="description" content="中国贵州茅台酒厂（集团）有限责任公司总部位于贵州省北部风光旖旎的赤水河畔茅台镇，公司拥有全资子公司、控股公司、参股公司32家，涉足产业领域包括白酒、啤酒、葡萄酒、证劵、银行、保险、物业、科研、旅游、房地产开发等">
    <LINK rel="Shortcut Icon" href="<?php echo ($system["ico"]); ?>" />
    <script type="text/javascript" src="/Public/static/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/Public/static/js/jquery.mt.js"></script>
    <link href="/Public/static/css/mtjt.css" rel="stylesheet" type="text/css">
    <link href="/Public/static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="daohang">
        <div class="top" style="width: 1200px;">
        	<a href="" target="_blank">黔北酒乡网</a> | <a href="" target="_blank">贵州裕尔盈酒业有限公司</a>
        </div>
        <div class="dh-1200" style="background: #00800078;">
        	<a href="">
        		<!-- 台酿盛宴 -->
        		<img src="/Public/static/zhanweitupian.png" alt="贵州茅台集团" width="230" height="70" border="0">
        	</a>
            <ul>
                <li><a href="/">首&nbsp;页</a></li>
                <li><a href="/index.php/Home/Liquor/index.html">白酒专供</a></li>
                
                <li><a href="/index.php/Home/Culture/index.html">白酒文化</a></li>
                
                <li><a href="/index.php/Home/News/index.html">酒乡动态</a></li>
                <li><a href="/index.php/Home/Business/index.html">关于我们</a></li>
                <!-- <li><a href="">关于我们</a></li> -->
                <!-- <li><a href="http://www.china-moutai.com/bolan/">酒之博览</a></li> -->
                <!-- <li><a href="http://www.emaotai.cn/" target="_blank">茅台商城</a></li> -->
            </ul>
        </div>
    </div>
    <div class="top-img" style="background-image: url(/Public/static/images/20151226082904849.jpg);background-color: #A7BDCA"></div>
    <div style="width: 100%;height: auto;">
        <div style="width: 1200px;margin:0 auto;">
            <ol class="breadcrumb" style="background: none;">
                <li><a href="/">首页</a></li>
                <li><a href="/Home/Liquor/index/cid/<?php echo ($cid); ?>.html">酒乡动态</a></li>
                <li class="active"><?php echo ($cname); ?></li> 
            </ol>
            <!-- <div class="dqwz" style="font-size: 12px;line-height: 16px; padding-top: 10px;  padding-right: 50px; padding-bottom: 20px;padding-left: 10px;"><a href="http://www.china-moutai.com">首页</a><span> &gt; </span><a href="http://www.china-moutai.com/pinpai/">品牌战略</a> > <a href="http://www.china-moutai.com/pinpai/pinpaizhanlue/">品牌战略</a> > </div> -->
        </div>
    </div>
    <div class="n-box">
        <div class="zuobian" style="min-height:80px;width: 300px">
            <div class="list-group" style="margin-bottom: 0px;">
                <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">白酒专供</h4>
                </a>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="/Home/Liquor/index/cid/<?php echo ($v["id"]); ?>.html" class="list-group-item " <?php if($v["id"] == $cid): ?>style="color:red;"<?php endif; ?>><?php echo ($v["cname"]); ?><span class="f-r" style="float: right;"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
             
            </div>

        </div>
        <div class="youbian" style="width: 846px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading"><h3 class="panel-title"><?php echo ($mess["title"]); ?></h3></div> -->

                <div class="panel-body" style="border: 1px solid #ddd;margin: 10px;">
                    <ul class="list-group col-sm-7">
                        <li class="list-group-item" style="border: 0px;"><h3><?php echo ($mess["name"]); ?></h3></li>
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
            <div class="wenzhang" style="min-height:400px;margin-top: 10px;">
                <?php echo ($mess["summary"]); ?>
                <div class="clear"></div>
                <?php echo ($mess["content"]); ?>
            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dibu">
        <div class="dibu-1200">
			<!-- <a href="http://mail.moutaichina.com:8000/" target="_blank">企业邮箱</a> |
            <a href="http://www.china-moutai.com/guanyu/kaipiao/">开票信息</a> | <a href="http://www.china-moutai.com/xinwen/zhaopingonggao/">人才招聘</a> | <a href="http://www.china-moutai.com/guanyu/lianxi/">联系我们</a> |
            <a href="http://202.98.222.66:8080/elearning/login-MOU.jsp" target="_blank">在线培训</a> |
            <a href="http://zt.china-moutai.com/" target="_blank">旧版</a> | -->
            
            <!-- <span id="cnzz_stat_icon_1000018212"><a href="http://www.cnzz.com/stat/website.php?web_id=1000018212" target="_blank" title="站长统计">站长统计</a></span> -->
            <br> 贵州裕尔盈酒业有限责任公司 版权所有 2017 <a href="" target="_blank">黔ICP备17011675号</a>&nbsp;&nbsp; <a href="/Public/static/picture/20160607033555944.jpg" target="_blank">经营许可证编号：黔B2-20050029</a> <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=52038202001007"><img src="/Public/static/picture/20160708112057536.png" width="15" height="15">贵公网安备 52038202001007号</a></div>
    </div>
</body>

</html>