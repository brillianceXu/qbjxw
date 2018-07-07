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
    <title>53%vol 2.5L贵州大曲酒(戊戌狗年) - 贵州大曲 - 国酒茅台-官网</title>
    <style type="text/css">
    <!-- .cp-box {
        margin-right: 50px;
        margin-left: 50px;
        padding-top: 30px;
        margin-bottom: 50px;
        padding-bottom: 50px;
        border-bottom-width: 1px;
        border-bottom-style: dotted;
        border-bottom-color: #666666;
    }

    .cp-js {
        float: right;
        height: 380px;
        width: 450px;
    }

    .cp-js h1 {
        font-size: 22px;
        color: #000000;
    }

    .cp-js p {
        height: 35px;
        color: #333333;
    }

    .cp-js-img {
        padding-top: 55px;
    }

    .lanrenzhijia {
        width: 352px;
        overflow: hidden;
        float: left;
    }

    .jqzoom {
        float: left;
        border: none;
        position: relative;
        padding: 0px;
        cursor: pointer;
        margin: 0px;
        display: block;
    }

    .jqzoom img {
        background: url(images/loading.gif) no-repeat center center;
        height: 350px;
        width: 350px;
    }

    .zoomdiv {
        z-index: 100;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 350px;
        height: 350px;
        background: #ffffff;
        border: 1px solid #CCCCCC;
        display: none;
        text-align: center;
        overflow: hidden;
    }

    .jqZoomPup {
        z-index: 10;
        visibility: hidden;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 20px;
        height: 20px;
        border: 1px solid #aaa;
        background: #ffffff/*url(images/zoom.png) 50% center no-repeat*/
        ;
        opacity: 0.5;
        -moz-opacity: 0.5;
        -khtml-opacity: 0.5;
        filter: alpha(Opacity=50);
    }
    /*图片小图预览列表*/

    .spec-preview {
        width: 350px;
        height: 350px;
        border: 1px solid #DFDFDF;
    }

    .spec-scroll {
        clear: both;
        margin-top: 5px;
        width: 352px;
    }

    .spec-scroll .prev {
        float: left;
        margin-right: 4px;
    }

    .spec-scroll .next {
        float: right;
    }

    .spec-scroll .prev,
    .spec-scroll .next {
        display: block;
        font-family: "宋体";
        text-align: center;
        width: 10px;
        height: 54px;
        line-height: 54px;
        border: 1px solid #CCC;
        background: #EBEBEB;
        cursor: pointer;
        text-decoration: none;
    }

    .spec-scroll .items {
        float: left;
        position: relative;
        width: 322px;
        height: 56px;
        overflow: hidden;
    }

    .spec-scroll .items ul {
        position: absolute;
        width: 999999px;
        height: 56px;
    }

    .spec-scroll .items ul li {
        float: left;
        width: 64px;
        text-align: center;
    }

    .spec-scroll .items ul li img {
        border: 1px solid #CCC;
        padding: 2px;
        width: 50px;
        height: 50px;
    }

    .spec-scroll .items ul li img:hover {
        border: 2px solid #FF6600;
        padding: 1px;
    }

    -->
    </style>
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
    <div class="box-ntop" style="background-image: url(images/20160101122150780.jpg);background-color: #5CBFDD"></div>
    <div class="box-n-1200">
        <div class="zuobian tyyj-gy">
            <div class="list-title yuanjiao">产品中心</div>
            <ul>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dangqian"><span class="iocyb">&gt;</span><a href="/Home/Goods/index/cid/<?php echo ($v["id"]); ?>" ><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="youbian tyyj-gy" style="min-height:800px">
            <div class="y_title">
                <a href="http://www.moutaichina.com">首页</a><span> &gt; </span><a href="http://www.moutaichina.com/chanpin/">产品中心</a> > <a href="http://www.moutaichina.com/chanpin/qita/">其他酱香系列</a> > <a href="http://www.moutaichina.com/chanpin/qita/guizhoudaqu/">贵州大曲</a> >
            </div>
            <div class="cp-box">
                <div class="lanrenzhijia">
                    <!-- 大图begin -->
                    <div id="preview" class="spec-preview">
                        <span class="jqzoom"><img jqimg="picture/20180628111447513.jpg" src="picture/20180628111447513.jpg" /></span>
                    </div>
                    <!-- 大图end -->
                    <!-- 缩略图begin -->
                    <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
                        <div class="items">
                            <ul>
                                <li><img bimg="/uploadfile/2018/0628/GZDQ-02.jpg" src="picture/thumb_350_350_gzdq-02.jpg" onmousemove="preview(this);"></li>
                                <li><img bimg="/uploadfile/2018/0628/GZDQ-04.jpg" src="picture/thumb_350_350_gzdq-04.jpg" onmousemove="preview(this);"></li>
                                <li><img bimg="/uploadfile/2018/0628/GZDQ-05.jpg" src="picture/thumb_350_350_gzdq-05.jpg" onmousemove="preview(this);"></li>
                                <li><img bimg="/uploadfile/2018/0628/GZDQ-07.jpg" src="picture/thumb_350_350_gzdq-07.jpg" onmousemove="preview(this);"></li>
                                <li><img bimg="/uploadfile/2018/0628/GZDQ-06.jpg" src="picture/thumb_350_350_gzdq-06.jpg" onmousemove="preview(this);"></li>
                            </ul>
                        </div>
                    </div>
                    <!-- 缩略图end -->
                    <script src="js/jquery.jqzoom.js"></script>
                    <script src="js/lanrenzhijia.js"></script>
                </div>
                <div class="cp-js">
                    <h1><?php echo ($mess["name"]); ?></h1>
                    <p style="font-size: 16px;line-height: 26px;color: #999999; font-weight:400; font-family:'微软雅黑', '黑体'; text-indent: 2em;margin-bottom:-10px; padding-top:15px;">—— <?php echo ($mess["nickname"]); ?>
                        <div class="clear"></div>
                    </p>
                    <p><strong>名&nbsp;&nbsp;称</strong>：<?php echo ($mess["name"]); ?></p>
                    <p><strong>香&nbsp;&nbsp;型</strong>：酱香型</p>
                    <p><strong>酒精度</strong>：53%vol% vol</p>
                    <p><strong>净含量</strong>：2500ml ml</p>
                    <p><strong>总代理</strong>：</p>
                    <p><strong>包&nbsp;&nbsp;装</strong>：彩盒、酒瓶、外箱</p>
                    <p class="cp-js-img"><a href="http://www.emaotai.cn/" target="_blank"><img src="picture/sp.gif" alt="茅台官方商城网站" title="茅台官方商城网站" border="0" /></a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="wz-box"><img alt="" src="picture/gzdq-04800x800.jpg" style="height: 800px; width: 800px" />
                <br />
                <br />
                <br />
                <br /> 产品名称：53%vol&nbsp; 2.5L贵州大曲酒(戊戌狗年)
                <br /> 53%vol&nbsp; 2.5L贵州大曲酒（戊戌狗年），由贵州茅台酒股份有限公司出品，是一款集生肖文化、五行文化、书画文化、白酒文化于一身，具有很高艺术品位和收藏价值的生肖纪念酒。
                <br /> 贵州大曲（戊戌狗年）酒，传承茅台酒传统酿造工艺，瓶形源自茅台酒的酿酒用&ldquo;酒甑子&rdquo;，采用与五行契合的&ldquo;五斤&rdquo;装大容量的大坛设计，以戊戌年属土的&ldquo;大地金&rdquo;作为主色调，添加梅花浮雕压纹工艺，寓意为&ldquo;两全其美&rdquo;，特邀中国美术家协会会员李宏钧先生绘制画作《犬》，配以中国书法家王文杰先生墨宝，寓有忠犬守福，神来气旺之意，乃醇美臻选、品藏皆宜之佳品。
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