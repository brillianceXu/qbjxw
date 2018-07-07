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
    <div class="fullSlide">
        <div class="bd">
            <ul>
                <?php if(is_array($banner)): $i = 0; $__LIST__ = array_slice($banner,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li _src="url(<?php echo ($v["route"]); ?>)" style="background-color:#;background-repeat: no-repeat;background-position: center top;"><a href="/Home/News/detail/id/<?php echo ($v["id"]); ?>" target="_blank"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
            </ul>
        </div>
        <div class="hd">
            <ul></ul>
        </div>
        <span class="prev"></span>
    <span class="next"></span></div>
    </div>
    
    <script type="text/javascript">
    /* 控制左右按钮显示 */
    jQuery(".fullSlide").hover(function() { jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5) }, function() { jQuery(this).find(".prev,.next").fadeOut() });

    /* 调用SuperSlide */
    jQuery(".fullSlide").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        effect: "fold",
        autoPlay: true,
        autoPage: true,
        trigger: "click",
        startFun: function(i) {
            var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
            if (!!curLi.attr("_src")) {
                curLi.css("background-image", curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
            }
        }
    });
    </script>
    <div class="txtMarquee-left">
        <div class="bd">
            <ul class="infoList">
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3856.html">关于2018年贵州茅台招聘笔试安排及考试范围的通知</a><span>[2018-06-24] </span></li>
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3811.html">茅台学院2018年上半年招聘笔试的通知</a><span>[2018-06-07] </span></li>
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3709.html">2018年贵州茅台医院第一批招聘工作人员笔试成绩及进入面试人员公示</a><span>[2018-05-14] </span></li>
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3689.html">关于招聘国酒广播电视台相关工作人员的公示</a><span>[2018-05-10] </span></li>
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3591.html">关于招聘机电维修公司维修工的公示</a><span>[2018-04-09] </span></li>
                <li>&#8226; <a href="http://www.moutaichina.com/xinwen/2018/3581.html">关于递补信息中心新媒体管理员岗位考生刘露的公示</a><span>[2018-04-04] </span></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
    jQuery(".txtMarquee-left").slide({ mainCell: ".bd ul", autoPlay: true, effect: "leftMarquee", vis: 2, interTime: 50 });
    </script>
    <div class="index-box">
        <div class="index-b tyyj-gy yuanjiao">
            <div class="focusBox" style="margin:0 auto">
                <ul class="pic">
                    <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($v["link"]); ?>" title="<?php echo ($v["name"]); ?> "><img src="<?php echo ($v["route"]); ?>" title="<?php echo ($v["name"]); ?> "/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                   <!--  <li><a href="http://www.moutaichina.com/xinwen/2018/3877.html" title="居安思危，茅台长三角寻找新标杆、新标兵 "><img src="picture/thumb_378_210_20180701051939477.jpg" title="居安思危，茅台长三角寻找新标杆、新标兵 "/></a></li>
                    <li><a href="http://www.moutaichina.com/xinwen/2018/3876.html" title="西湖畔 钱塘边，“茅台酱香•万家共享”闪耀—杭州 "><img src="picture/thumb_378_210_20180701050857114.jpg" title="西湖畔 钱塘边，“茅台酱香•万家共享”闪耀—杭州 "/></a></li> -->
                </ul>
                <div class="txt-bg"></div>
                <div class="txt">
                    <ul>
                        <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($v["link"]); ?>"><?php echo ($v["name"]); ?>...</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                     <!--    <li><a href="http://www.moutaichina.com/xinwen/2018/3877.html">居安思危，茅台长三角寻找新标杆、新标兵 </a></li>
                        <li><a href="http://www.moutaichina.com/xinwen/2018/3876.html">西湖畔 钱塘边，&ldquo;茅台酱香•万家共享...</a></li> -->
                    </ul>
                </div>
                <ul class="num">
                    <?php if(is_array($pics)): $k = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li><a><?php echo ($k); ?></a><span></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  <!--   <li><a>2</a><span></span></li>
                    <li><a>3</a><span></span></li> -->
                </ul>
            </div>
            <script type="text/javascript">
            jQuery(".focusBox").slide({
                titCell: ".num li",
                mainCell: ".pic",
                effect: "fold",
                autoPlay: true,
                trigger: "click",
                //下面startFun代码用于控制文字上下切换
                startFun: function(i) {
                    jQuery(".focusBox .txt li").eq(i).animate({ "bottom": 0 }).siblings().animate({ "bottom": -36 });
                }
            });
            </script>
            <div class="clear"></div>
            <div class="index-h1"><span class="more"><a href="/xinwen/">+更多</a></span>
                <h2>企业概况</h2></div>
            <ul class="index_list">
                <li><a href="http://www.moutaichina.com/xinwen/2018/3878.html">茅台集团喜获仁怀市纪念改革开放四十周年合唱比赛冠军 </a></li>
                <li><a href="http://www.moutaichina.com/xinwen/2018/3877.html">居安思危，茅台长三角寻找新标杆、新标兵 </a></li>
                <li><a href="http://www.moutaichina.com/xinwen/2018/3876.html">西湖畔 钱塘边，“茅台酱香•万家共享”闪耀—杭州 </a></li>
                <li><a href="http://www.moutaichina.com/xinwen/2018/3875.html">情暖非洲，心系教育——莫桑比克茅台学校正式开工 </a></li>
            </ul>
        </div>
        <div class="index-b tyyj-gy yuanjiao"><img src="<?php echo ($newspics["route"]); ?>" width="378" height="210" />
            <div class="index-h1"><span class="more"><a href="/touzi/">+更多</a></span>
                <h2>新闻资讯</h2></div>
            <ul class="index_list">
                <li><a href="http://www.moutaichina.com/touzi/2018/3813.html">贵州茅台2017年年度权益分派实施公告</a></li>
                <li><a href="http://www.moutaichina.com/touzi/2018/3768.html">贵州茅台2018年第一季度报告</a></li>
                <li><a href="http://www.moutaichina.com/touzi/2018/3767.html">贵州茅台关于参加贵州辖区上市公司2017年度网上业绩说明会的公告</a></li>
                <li><a href="http://www.moutaichina.com/touzi/2018/3759.html">贵州茅台2017年年度股东大会的法律意见书</a></li>
            </ul>
        </div>
        <div class="index-c tyyj-gy yuanjiao"> <a href="http://www.moutaichina.com/fuwu/fwsy/"><img src="<?php echo ($servicepics["route"]); ?>" title="国酒茅台防伪溯源系统" width="382" height="210" border="0" /></a>
            <div class="index-h1"><span class="more"><a href="/fuwu/">+更多</a></span>
                <h2>服务中心</h2></div>
            <ul class="index_tzz">
                <li><a href="/fuwu/fwsy/">防伪溯源</a></li>
                <li><a href="/fuwu/zscqbh">打假维权</a></li>
                <li><a href="/fuwu/">服务承诺 </a></li>
                <li><a href="http://202.98.222.66:8080/elearning/login-MOU.jsp" target="_blank">在线培训</a></li>
                <li><a href="http://zp.moutai.com.cn:8089/outhome/" target="_blank">在线招聘</a></li>
                <li><a href="http://gid.zx315.cn/maotai" target="_blank">物流查询</a></li>
                <li><a href="/fuwu/yewufuwu/">业务服务</a></li>
                <li><a href="/fuwu/guojijingxiaoshang/">国际经销商</a></li>
                <li><a href="/fuwu/guoneijingxiaoshang/">国内经销商</a></li>
                <li><a href="http://www.china-moutai.com/mtzy/" target="_blank">茅台置业</a></li>
                <li><a href="http://www.china-moutai.com/whzl/" target="_blank">茅台醇香之旅</a></li>
                <li><a href="http://jc.china-moutai.com:8010/ebvp/" target="_blank">茅台集采平台</a></li>
                <li><a href="https://bk.moutai.com.cn/" target="_blank">国酒茅台报</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="slideGroup tyyj-gy" style="margin:0 auto;margin-bottom: 30px;">
        <div class="parHd">
            <ul>
                <h3>产品中心</h3>
                <?php if(is_array($goods_cate)): $i = 0; $__LIST__ = $goods_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><?php echo ($v["cname"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!-- <div class="shangcheng"><a href="http://www.emaotai.cn/" target="_blank">网上商城</a></div> -->
            <span><a href="/chanpin/">+更多产品</a></span> </div>
        <div class="parBd">
            <div class="slideBox">
                <a class="sPrev" href="javascript:void(0)"></a>
                <ul>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2016/35.html" title="15年陈年茅台酒"><img src="picture/20151231100738454.jpg" title="15年陈年茅台酒"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2016/35.html" target="_blank">15年陈年茅台酒</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/38.html" title="年份茅台酒珍藏套装(金奖百年)"><img src="picture/20151231101301118.jpg" title="年份茅台酒珍藏套装(金奖百年)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/38.html" target="_blank">年份茅台酒珍...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/37.html" title="陈年茅台酒纪念酒(建国60周年纪念酒)"><img src="picture/20151231101232107.jpg" title="陈年茅台酒纪念酒(建国60周年纪念酒)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/37.html" target="_blank">陈年茅台酒纪...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/34.html" title="15年陈年茅台酒(中国体育代表团铜牌酒)"><img src="picture/20151231100655644.jpg" title="15年陈年茅台酒(中国体育代表团铜牌酒)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/34.html" target="_blank">15年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/33.html" title="15年陈年茅台酒(九龙墨宝)"><img src="picture/20151231100423959.jpg" title="15年陈年茅台酒(九龙墨宝)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/33.html" target="_blank">15年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/31.html" title="30年陈年茅台酒"><img src="picture/20151231100245249.jpg" title="30年陈年茅台酒"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/31.html" target="_blank">30年陈年茅台酒</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/29.html" title="30年陈年茅台酒(九龙墨宝)"><img src="picture/20151231100127748.jpg" title="30年陈年茅台酒(九龙墨宝)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/29.html" target="_blank">30年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/30.html" title="30年陈年茅台酒(中国体育代表团银牌酒)"><img src="picture/20151231100213901.jpg" title="30年陈年茅台酒(中国体育代表团银牌酒)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/30.html" target="_blank">30年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/28.html" title="30年陈年茅台酒(百年国博)"><img src="picture/20151231100046442.jpg" title="30年陈年茅台酒(百年国博)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/28.html" target="_blank">30年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/26.html" title="50年陈年茅台酒"><img src="picture/20151231095903120.jpg" title="50年陈年茅台酒"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/26.html" target="_blank">50年陈年茅台酒</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/25.html" title="50年陈年茅台酒(中国体育代表团金牌酒)"><img src="picture/20151231095824123.jpg" title="50年陈年茅台酒(中国体育代表团金牌酒)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/25.html" target="_blank">50年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/24.html" title="50年陈年茅台酒(百年巨匠)"><img src="picture/20151231095733340.jpg" title="50年陈年茅台酒(百年巨匠)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/24.html" target="_blank">50年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/23.html" title="80年陈年茅台酒(九龙墨宝)"><img src="picture/20151231095549257.jpg" title="80年陈年茅台酒(九龙墨宝)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/23.html" target="_blank">80年陈年茅台...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/chennian/2015/22.html" title="80年陈年茅台酒"><img src="picture/20151231093143656.jpg" title="80年陈年茅台酒"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/chennian/2015/22.html" target="_blank">80年陈年茅台酒</a></div>
                    </li>
                </ul> <a class="sNext" href="javascript:void(0)"></a> </div>
            <!-- slideBox End -->
            <div class="slideBox">
                <a class="sPrev" href="javascript:void(0)"></a>
                <ul>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2018/218.html" title="53%vol  2.5L贵州大曲酒(戊戌狗年)"><img src="picture/thumb_100_100_20180628111447513.jpg" title="53%vol  2.5L贵州大曲酒(戊戌狗年)"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2018/218.html" target="_blank">53%vol  2.5...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/216.html" title="茅台迎宾酒（凤祥）"><img src="picture/thumb_100_100_ybj_fx_001.jpg" title="茅台迎宾酒（凤祥）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/216.html" target="_blank">茅台迎宾酒（...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/215.html" title="茅台迎宾酒（龙呈）"><img src="picture/thumb_100_100_ybj_lc_001.jpg" title="茅台迎宾酒（龙呈）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/215.html" target="_blank">茅台迎宾酒（...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/214.html" title="茅台迎宾酒（花开富贵）"><img src="picture/thumb_100_100_ybj_hkfg_001.jpg" title="茅台迎宾酒（花开富贵）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/214.html" target="_blank">茅台迎宾酒（...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/213.html" title="茅台迎宾酒（中国红）"><img src="picture/thumb_100_100_ybj_zgh_001.jpg" title="茅台迎宾酒（中国红）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/213.html" target="_blank">茅台迎宾酒（...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/212.html" title="赖茅酒（传禧）"><img src="picture/thumb_100_100_lmj_cx_001.jpg" title="赖茅酒（传禧）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/212.html" target="_blank">赖茅酒（传禧）</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/211.html" title="赖茅酒（ 端曲）"><img src="picture/thumb_100_100_lm_dq_001.jpg" title="赖茅酒（ 端曲）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/211.html" target="_blank">赖茅酒（ 端曲）</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/210.html" title="仁酒（368ml）"><img src="picture/thumb_100_100_rj_368_001.jpg" title="仁酒（368ml）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/210.html" target="_blank">仁酒（368ml）</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/209.html" title="汉酱酒（375ml）"><img src="picture/thumb_100_100_hj_375_001.jpg" title="汉酱酒（375ml）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/209.html" target="_blank">汉酱酒（375ml）</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/208.html" title="贵州大曲（80年代银酱）"><img src="picture/thumb_100_100_gzdq_80_a01.jpg" title="贵州大曲（80年代银酱）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/208.html" target="_blank">贵州大曲（80...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/207.html" title="贵州大曲（80年代金酱）"><img src="picture/thumb_100_100_gzdq_80_001.jpg" title="贵州大曲（80年代金酱）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/207.html" target="_blank">贵州大曲（80...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/206.html" title="贵州大曲（70年代）"><img src="picture/thumb_100_100_gzdq_70_001.jpg" title="贵州大曲（70年代）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/206.html" target="_blank">贵州大曲（70...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/205.html" title="贵州大曲（丁酉鸡年）"><img src="picture/thumb_100_100_20170512095022927.jpg" title="贵州大曲（丁酉鸡年）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/205.html" target="_blank">贵州大曲（丁...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/204.html" title="贵州大曲（首发纪念）"><img src="picture/thumb_100_100_20170512094433535.jpg" title="贵州大曲（首发纪念）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/204.html" target="_blank">贵州大曲（首...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="http://www.moutaichina.com/chanpin/qita/2017/202.html" title="茅台王子酒（酱色）"><img src="picture/thumb_100_100_wzj_js_001.jpg" title="茅台王子酒（酱色）"/></a></div>
                        <div class="title"><a href="http://www.moutaichina.com/chanpin/qita/2017/202.html" target="_blank">茅台王子酒（...</a></div>
                    </li>
                </ul> <a class="sNext" href="javascript:void(0)"></a> </div>
            <!-- slideBox End -->
        </div>
        <!-- parBd End -->
    </div>
    <script type="text/javascript">
    jQuery(".slideGroup .slideBox").slide({ mainCell: "ul", vis: 8, prevCell: ".sPrev", nextCell: ".sNext", effect: "leftLoop" });

    jQuery(".slideGroup").slide({ titCell: ".parHd li", mainCell: ".parBd" });
    </script>
    <!-- <div class="dibu-ioc">
        <a href="http://www.gzaic315.gov.cn/ei/Ei!certificate.action?id=4028808a3f22cd16013f26ee61b00005" target="_blank"><img src="picture/20160729031501416.jpg" width="1200" height="74" border="0" usemap="#Map" /></a>
       
    </div> -->
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
    <script type="text/javascript">
    var browser = {
        versions: function() {
            var u = navigator.userAgent,
                app = navigator.appVersion;
            return { //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }(),
        language: (navigator.browserLanguage || navigator.language).toLowerCase()
    }

    if (browser.versions.mobile || browser.versions.ios || browser.versions.android || browser.versions.iPhone || browser.versions.iPad) {
        window.location = "index.php?m=wap&siteid=1";
    }
    </script>
</body>

</html>