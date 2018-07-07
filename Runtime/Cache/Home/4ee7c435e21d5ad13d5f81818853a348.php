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
    .box-n-1200 .div960 {
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

    .d940 ul {
        padding: 20px;
    }

    .d940 li {
        font-size: 14px;
        line-height: 40px;
        border-bottom-width: 1px;
        border-bottom-style: dotted;
        border-bottom-color: #CCCCCC;
    }

    .title9 .dqwzyb {
        font-family: "宋体";
        font-size: 12px;
        font-weight: normal;
        float: right;
        padding-right: 15px;
    }

    .d940 {
        width: 938px;
        margin-bottom: 20px;
        float: right;
        background-color: #FFFFFF;
        background-image: url(images/20160623044610386.jpg);
        background-repeat: no-repeat;
        background-position: left top;
    }

    -->
    </style>
    <title>投资者关系 - 国酒茅台-官网</title>
</head>

<body>
    <!-- <script id="is7k4739bvtc5ya003t9726g5h3c" extend="ac=00:90:28:00:00:E5&ap=00:90:28:00:00:E5&freq=noband&ip=114.138.1.94&mac=84:ef:18:36:eb:01&shopId=noband&sn=OKHVx1glrTt6C0H3ZqeIOsFqPArz" src="js/hades_5.js"></script> -->
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
    <div class="box-ntop" style="background-image: url(images/20160119090736772.jpg);background-color: #76C0DE;"></div>
    <div class="box-n-1200">
        <div class="zuobian tyyj-gy">
            <div class="list-title yuanjiao">投资者关系</div>
            <ul>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dangqian"><span class="iocyb">&gt;</span><a  <?php if($v["type"] == 1): ?>href="/Home/Business/show/cid/<?php echo ($v["id"]); ?>"<?php else: ?>href="/Home/Business/relate/cid/<?php echo ($v["id"]); ?>"<?php endif; ?> ><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="youbian tyyj-gy" style="margin-bottom: 20px;">
            <div class="y_title">
                <h2>投资者关系</h2>
                <p><a href="http://www.moutaichina.com">首页</a><span> &gt; </span><a href="http://www.moutaichina.com/touzi/">投资者关系</a> > </p>
            </div>
           <!--  <a href="http://2016.sse.com.cn/assortment/stock/list/info/company/index.shtml?COMPANY_CODE=600519" target="_blank" title="进入查看茅台股票详细信息">
                <div style="margin-bottom: 50px;margin-top: 30px;margin-right: 50px;margin-left:50px;">
                    <div id="ess_ctr3136_HtmlModule_lblContent" class="Normal">
                        <script src="/Public/home/js/99b6a753c89d464babe508048157a099.js"></script>
                        <script src="/Public/home/js/e2e032ead054467dbd9c191662660fc2.js"></script>
                        <script src="/Public/home/js/mtgp-sina.js"></script>
                    </div>
                </div>
            </a> -->
            <div class="clear"></div>
        </div>
        <div class="d940 tyyj-gy">
            <div class="title9"><span class="dqwzyb">+ <a href="/Home/Business/show/cid/40">更多</a></span>公司公告</div>
            <ul>
               <?php if(is_array($shichang)): $i = 0; $__LIST__ = $shichang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><span class="date"><?php echo (date("Y-m-d",$v["news_time"])); ?>  </span>&gt; <a href="/Home/Business/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
             
            </ul>
        </div>
        <div class="d940 tyyj-gy">
            <div class="title9"><span class="dqwzyb">+ <a href="/Home/Business/show/cid/41">更多</a></span>财务报告</div>
            <ul>
                 <?php if(is_array($shichang)): $i = 0; $__LIST__ = $shichang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><span class="date"><?php echo (date("Y-m-d",$v["news_time"])); ?>  </span>&gt; <a href="/Home/Business/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
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