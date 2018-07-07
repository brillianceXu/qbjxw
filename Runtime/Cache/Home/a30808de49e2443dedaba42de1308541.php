<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/Public/home/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery.mt.js"></script>
    <link href="/Public/home/css/mtgf.css" rel="stylesheet" type="text/css" />
    <link href="/Public/home/css/city-picker.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico">
    <title>黔北酒乡网</title>
</head>

<body>
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
    <div class="box-ntop" style="background-image: url(images/20151231030339132.jpg);background-color: #2293FD"></div>
    <div class="box-n-1200">
        <div class="zuobian tyyj-gy">
            <div class="list-title yuanjiao">企业概况</div>
            <ul>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dangqian"><span class="iocyb">&gt;</span><a <?php if($v["type"] == 1): ?>href="/Home/About/index/cid/<?php echo ($v["id"]); ?>"<?php else: ?>href="/Home/About/about/cid/<?php echo ($v["id"]); ?>"<?php endif; ?> ><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/ldjj/">领导介绍</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/jiagou/">公司架构</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/wenhua/">文化理念</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/rongyu/">茅台荣誉</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/jidi/">生产基地</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/lianxi/">联系我们</a></li>
                <li><span class="iocyb">&gt;</span><a href="http://www.moutaichina.com/gaikuang/fazhanguihua/">发展规划</a></li> -->
            </ul>
        </div>
        <div class="youbian tyyj-gy" style="min-height:600px">
            <div class="y_title">
                <a href="http://www.moutaichina.com">首页</a><span> &gt; </span><a href="http://www.moutaichina.com/gaikuang/">企业概况</a> > <a href="http://www.moutaichina.com/gaikuang/jianjie/">公司简介</a> >
            </div>
            <div class="wz-title">
                <h1><?php echo ($mess["title"]); ?></h1>
            </div>
            <div class="wz-box">
                <?php echo ($mess["content"]); ?>
                <br />
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
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