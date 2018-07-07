<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/Public/home/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery.mt.js"></script>
    <link href="/Public/home/css/mtgf.css" rel="stylesheet" type="text/css" />
    <link href="/Public/home/css/city-picker.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico">
    <title>黔北酒乡网</title>
    <style type="text/css">
    <!-- .box-n-1200 .div960 {
        float: right;
        width: 940px;
    }

    .div460 {
        float: left;
        height: 370px;
        width: 458px;
        background-color: #FFFFFF;
        margin-bottom: 20px;
        background-image: url(images/20160623044610386.jpg);
        background-repeat: no-repeat;
        background-position: left top;
    }

    .title9 {
        line-height: 48px;
        margin-right: auto;
        margin-left: auto;
        padding-left: 35px;
        font-size: 20px;
        color: #D8050B;
        font-family: "微软雅黑";
    }

    .div460 ul {
        padding: 20px;
    }

    .div460 li {
        font-size: 14px;
        line-height: 40px;
        border-bottom-width: 1px;
        border-bottom-style: dotted;
        border-bottom-color: #CCCCCC;
        color: #FF0000;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .title9 .dqwzyb {
        font-family: "宋体";
        font-size: 12px;
        font-weight: normal;
        float: right;
        padding-right: 15px;
    }

    .ggg960 {
        background-color: #FFFFFF;
        padding: 1px;
        float: left;
        width: 936px;
        margin-bottom: 20px;
        height: 100px;
    }

    -->
    </style>
    <title>新闻资讯 - 国酒茅台-官网</title>
</head>

<body>
    <script id="is7k4739bvtc5ya003t9726g5h3c" extend="ac=00:90:28:00:00:E5&ap=00:90:28:00:00:E5&freq=noband&ip=114.138.1.94&mac=84:ef:18:36:eb:01&shopId=noband&sn=OKHVx1glrTt6C0H3ZqeIOsFqPArz" src="js/hades_6.js"></script>
    <div class="top">
        <div class="nav-box"><a href="/"><img src="/Public/static/zhanweitupian.png" width="240" height="60" border="0"  class="logo" /></a>
            <div class="nav">
                <div class="nav-top"> <a href="/" target="_blank">黔北酒乡网</a> <!-- <a href="https://dj.moutai.com.cn" target="_blank"></a> --></div>
                <ul>
                    <!-- <li class="nav_li"><a href="http://www.emaotai.cn/" target="_blank">茅台商城</a></li> -->
                    <li class="nav_li"><a href="/Home/Business/index">合作者关系</a></li>
                    <li class="nav_li"><a href="/Home/Service/index">服务中心</a></li>
                    <li class="nav_li"><a href="/Home/News/index">新闻资讯</a></li>
                    <li class="nav_li"><a href="/Home/Goods/index">产品中心</a></li>
                    <li class="nav_li"><a href="/Home/About/about">企业概况</a></li>
                    <li class="nav_li"><a href="/">首页</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="box-ntop" style="background-image: url(images/20160119090335319_2.jpg);background-color:#4D70B4;"></div>
    <div class="box-n-1200">
        <div class="zuobian tyyj-gy">
            <div class="list-title yuanjiao">新闻资讯</div>
            <ul>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dangqian"><span class="iocyb">&gt;</span><a href="/Home/News/news/cid/<?php echo ($v["id"]); ?>" ><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="div960">
            <div class="div460 tyyj-gy" style="margin-right: 20px;">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/25">更多</a></span>公告公示</div>
                <ul>
                    <?php if(is_array($gongshi)): $i = 0; $__LIST__ = $gongshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="div460 tyyj-gy">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/26">更多</a></span>招聘公告</div>
                <ul>
                    <?php if(is_array($zhaopin)): $i = 0; $__LIST__ = $zhaopin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="ggg960 tyyj-gy"><img src="/Public/home/picture/20151226105738404.jpg" width="936" height="100" /></div>
            <div class="div460 tyyj-gy" style="margin-right: 20px;">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/27">更多</a></span>公司新闻</div>
                <ul>
                    <?php if(is_array($gongsi)): $i = 0; $__LIST__ = $gongsi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="div460 tyyj-gy">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/28">更多</a></span>市场活动</div>
                <ul>
                    <?php if(is_array($shichang)): $i = 0; $__LIST__ = $shichang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="ggg960 tyyj-gy"><img src="/Public/home/picture/20151226105738404.jpg" width="936" height="100" /></div>
            <div class="div460 tyyj-gy" style="margin-right: 20px;">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/29">更多</a></span>媒体聚焦</div>
                <ul>
                    <?php if(is_array($meiti)): $i = 0; $__LIST__ = $meiti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="div460 tyyj-gy">
                <div class="title9"><span class="dqwzyb">+ <a href="/Home/News/news/cid/30">更多</a></span>行业动态</div>
                <ul>
                    <?php if(is_array($hangye)): $i = 0; $__LIST__ = $hangye;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>&gt; <a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="dibu">
        <div class="dibu1200">
            <div class="lianjie">
                <select name="select3" onChange="window.open(this.options[this.selectedIndex].value,'friend','toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes')">
                    >
                    <option selected="selected" value="#">--友情链接--</option>
                    
                    <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["link"]); ?>"><?php echo ($v["sitename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <!-- <select name="select3" onChange="window.open(this.options[this.selectedIndex].value,'friend','toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes')">
                    <option selected="selected" value="#">--友情链接--</option>
                    <option value="http://www.gov.cn/">中国政府网</option>
                    <option value="http://www.gzgov.gov.cn/">贵州人民政府网</option>
                    <option value="http://www.rh.gov.cn/">仁怀市人民政府网</option>
                    <option value="http://www.jiu.cn/">中华酒网</option>
                    <option value="http://www.tjkx.com/">糖酒快讯</option>
                    <option value="http://www.cada.cc/">酿酒协会</option>
                    <option value="http://www.moutaimagazine.com/">世界之醉</option>
                </select> -->
            </div>
            <div class="banquan"> <a style="font-weight:300;" href="http://mail.moutaichina.com:8000" target="_blank">企业邮箱</a> | <a style="font-weight:300;" href="/fuwu/kaipiao" target="_blank">开票信息</a> |
                <script type="text/javascript">
                var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cspan id='cnzz_stat_icon_1000018207'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000018207' type='text/javascript'%3E%3C/script%3E"));
                </script>
                <br />黔北酒乡网 &copy; 2017 黔ICP备10001658号
            </div>
        </div>
    </div>
</body>

</html>