<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/Public/home/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery.mt.js"></script>
    <link href="/Public/home/css/mtgf.css" rel="stylesheet" type="text/css" />
    <link href="/Public/home/css/city-picker.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico">
    <title>黔北酒乡网</title>
    <title>在线咨询 - 国酒茅台-官网</title>
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
    <div class="box-ntop" style="background-image: url(images/20151228094018569.jpg);background-color: #FDC763"></div>
    <div class="box-n-1200">
        <div class="zuobian tyyj-gy">
            <div class="list-title yuanjiao">服务中心</div>
            <ul>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dangqian"><span class="iocyb">&gt;</span><a <?php if($v["type"] == 1): ?>href="/Home/Service/consult/cid/<?php echo ($v["id"]); ?>"<?php else: ?>href="/Home/Service/index/cid/<?php echo ($v["id"]); ?>"<?php endif; ?> ><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li class="dangqian"><span class="iocyb">&gt;</span><a href="/Home/Service/consult">在线咨询</a></li>
            </ul>
        </div>
        <div class="youbian tyyj-gy" style="min-height:600px">
            <div class="y_title">
                <a href="http://www.moutaichina.com">首页</a><span> &gt; </span><a href="http://www.moutaichina.com/fuwu/">服务中心</a> > 在线咨询
            </div>
            <div class="wz-title">
                <h1>在线咨询</h1>
            </div>
            <div class="wz-box">
                <div style="width: 800px;margin-right: auto;margin-left: auto;">
                    <!--循环的开始-->
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：茅台年份？</strong>
                        <p style="font-size: 12px;color: #999999;">2018-06-26 13:07:13
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">我有瓶茅台，看不到生产日期了</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，您可以到当地的专卖店或直营店进行验证。或拨打电话：18185228522； 18185228521； 0851-22386145咨询；
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：关于申请退款问题？</strong>
                        <p style="font-size: 12px;color: #999999;">2018-03-03 11:08:35
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">我在茅台商城购买了飞天茅台两瓶，由于是帮朋友买的购买数量有误，在18年3月3日没有发货的前提下申请了退款，请问退款何时能申请成功。</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，建议您拨打客服热线400-818-9999咨询。
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：求真伪？</strong>
                        <p style="font-size: 12px;color: #999999;">2018-03-02 11:57:44
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">我买了两箱2008年飞天茅台，怎么查真伪？谢谢</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，您可以到当地的专卖店或直营店进行验证。或拨打电话：18185228522； 18185228521； 0851-22386145咨询；
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：茅台活动？</strong>
                        <p style="font-size: 12px;color: #999999;">2018-02-19 17:54:11
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">电视广告有茅台活动。10元钱抵2000多可以买六瓶茅台酒是真的吗?</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，不是真的。如您需要购买茅台酒，建议您到我公司的专卖店或直营店购买。请您登录茅台酒国内经销网址：http://www.moutaichina.com/fuwu/guoneijingxiaoshang/查询
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：茅台商城怎么上不去？</strong>
                        <p style="font-size: 12px;color: #999999;">2018-02-19 12:31:29
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">茅台商城怎么上不去？官网可上去，但同城的页面打不开</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，茅台商城官方网站可以登陆的，请您登陆茅台商城官方网站https://www.emaotai.cn/
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：真假？</strong>
                        <p style="font-size: 12px;color: #999999;">2017-10-09 18:52:50
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">我有瓶1990年的五星茅台！怎么查真伪</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，您可以到当地的专卖店或直营店进行验证。或拨打电话：18185228522； 18185228521； 0851-22386145咨询；
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：如何网上购买？</strong>
                        <p style="font-size: 12px;color: #999999;">2017-10-08 23:14:34
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">可以在网上购买吗</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，可以在网上进行购买，请您登录我公司茅台商城：http://www.emaotai.cn/
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：求真伪？</strong>
                        <p style="font-size: 12px;color: #999999;">2017-08-17 13:48:43
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">我刚收买到6瓶53度矛台酒，用手机验证，只有一瓶显示成功，另2瓶没反应，为何.箱中没有发票</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，您可以到当地的专卖店或直营店进行验证。或拨打电话：18185228522； 18185228521； 0851-22386145咨询；
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：手机APP茅台云商是官方授权么？</strong>
                        <p style="font-size: 12px;color: #999999;">2017-08-17 11:18:23
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">手机下载茅台云商购买飞天茅台是否官方授权网购</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>您好，茅台云商下载渠道，请您登陆茅台商城官方网站：https://www.emaotai.cn/下载。
                                    <p>
                    </div>
                    <div class="wd_out" onmouseover="this.className='wd_over'" onmouseout="this.className='wd_out'" style="margin-bottom: 18px;">
                        <strong style="color:#000000">问：198元一箱茅台？</strong>
                        <p style="font-size: 12px;color: #999999;">2017-08-10 16:49:47
                            <p>
                                <p style="font-size: 12px;color: #999999;margin-bottom: 18px;">有电话推销198元一箱茅台，是真的吗？</p>
                                <p style="color:#000000"><strong style="color:#FF0000">答：</strong>请您直接拨打我公司打假办电话：18185228522； 18185228521； 0852-2386145咨询；
                                    <p>
                    </div>
                    <!--循环的结束，以下为重复代码-->
                    <!--重复代码结束，分页代码开始 -->
                    <div id="pages">
                        <a class="a1">43条</a> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=0" class="a1">上一页</a> <span>1</span> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=2">2</a> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=3">3</a> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=4">4</a> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=5">5</a> <a href="http://www.moutaichina.com/index.php?m=guestbook&c=index&a=register&page=2" class="a1">下一页</a> </div>
                    <div class="clear"></div>
                </div>
                <!--分页代码结束 -->
                <script src="/Public/home/js/jquery.js" charset="UTF-8"></script>
                <script src="/Public/home/js/bootstrap.js" charset="UTF-8"></script>
                <script src="/Public/home/js/city-picker.data.js" charset="UTF-8"></script>
                <script src="/Public/home/js/city-picker.js" charset="UTF-8"></script>
                <script src="/Public/home/js/main.js" charset="UTF-8"></script>
                <script type="text/javascript" src="/Public/home/js/formvalidator.js" charset="UTF-8"></script>
                <script type="text/javascript" src="/Public/home/js/formvalidatorregex.js" charset="UTF-8"></script>
                <link href="/Public/home/css/guestbook.css" rel="stylesheet" type="text/css" />
                <link href="/Public/home/css/table_form.css" rel="stylesheet" type="text/css" />
                <!--main-->
                <div class="main">
                    <!--left_bar-->
                    <div class="col-liuyanban">
                        <table cellspacing="1" cellpadding="0" class="table_form" width="90%" style="text-align: left">
                            <tbody>
                                <tr>
                                    <th>留言标题：</th>
                                    <td>
                                        <input type="text" value="" id="title" name="title" class="input-text" style="width:504px" onkeyup="value=" /oblog/value.replace(/[^\u4E00-\u9FA5]/g, '')>
                                    </td>
                                </tr>
                                <tr>
                                    <tr>
                                        <th>留言内容：</th>
                                        <td>
                                            <textarea name="introduce" cols="40" rows="5" class="input-text" id="introduce" style='width:500px;height:70px;'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>您的姓名：</th>
                                        <td>
                                            <input type="text" value="" id="name" name="name" class="input-text" onkeyup="value=" /oblog/value.replace(/[^\u4E00-\u9FA5]/g, '')>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>性　　别：</th>
                                        <td>
                                            <input type="radio" value="男" name="sex" checked="checked" id="man" /> 男
                                            <input type="radio" value="女" name="sex" id="woman" /> 女
                                        </td>
                                    </tr>
                                    <th>电子邮箱：</th>
                                    <td>
                                        <input type="text" size="40" value="" name="email" id="email" class="input-text">
                                    </td>
                                </tr>
                                <tr>
                                    <th>联系电话：</th>
                                    <td>
                                        <input type="text" size="40" value="" name="tel" id="tel" class="input-text">
                                    </td>
                                </tr>
                                <tr hidden>
                                    <th>所属分类：</th>
                                    <td width="300">
                                        <input type="text" name="typeid" value="58" id="typeid" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>所在地区：</th>
                                    <td>
                                        <div id="distpicker">
                                            <div class="form-group">
                                                <div style="position: relative;">
                                                    <input id="city-picker3" style="width:260px;" class="form-control" readonly type="text" value=" " data-toggle="city-picker" name="address">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value=" 提 交 " name="dosubmit" class="button" id="dosubmit" />
                                        <input type="reset" value=" 取 消 " name="reset" class="button" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--right_bar-->
            </div>
            <script type="text/javascript">
            <!--
            $(function() {
                $.formValidator.initConfig({ autotip: true, formid: "myform", onerror: function(msg) {} });

                $("#title").formValidator({ onshow: "请输入留言标题", onfocus: "请输入留言标题" }).inputValidator({ min: 4, max: 80, onerror: "标题应该为2-10个汉字" }).regexValidator({ regexp: "ps_username", datatype: "enum", onerror: "标题格式错误" });

                $("#name").formValidator({ onshow: "请输入姓名", onfocus: "请输入姓名" }).inputValidator({ min: 4, max: 10, onerror: "姓名应该为2-3个汉字" }).regexValidator({ regexp: "ps_username", datatype: "enum", onerror: "姓名格式错误" });

                $("#email").formValidator({ onshow: "请输入电子邮箱", onfocus: "请输入电子邮箱", oncorrect: "邮箱格式正确" }).inputValidator({ min: 2, max: 32, onerror: "邮箱应该为2-32位之间" }).regexValidator({ regexp: "email", datatype: "enum", onerror: "请填写正确的邮箱地址" });

                //                    $("#lxqq").formValidator({onshow:"请输入QQ号码",onfocus:"请输入QQ号码",oncorrect:"QQ格式正确"}).inputValidator({min:5,max:10,onerror:"QQ号码应该为5-10位之间"}).regexValidator({regexp:"^[0-9]{5,20}$",onerror:"请填写正确的腾讯QQ号"});

                $("#tel").formValidator({ onshow: "请输入联系电话", onfocus: "请输入联系电话", oncorrect: "电话格式正确" }).inputValidator({ min: 8, max: 13, onerror: "电话号码应该为8-13为之间" }).regexValidator({ regexp: "^[0-9-]{6,13}$", onerror: "请填写正确的电话号码" });
                $("#introduce").formValidator({ onshow: "请输入留言内容", onfocus: "请输入留言内容" }).inputValidator({ min: 10, max: 200, onerror: "10-100个字之间" });

                $("#code").formValidator({ onshow: "请输入验证码", onfocus: "验证码不能为空" }).inputValidator({ min: 1, max: 999, onerror: "验证码不能为空" }).ajaxValidator({
                    type: "get",
                    url: "",
                    data: "m=pay&c=deposit&a=public_checkcode",
                    datatype: "html",
                    async: 'false',
                    success: function(data) {
                        if (data == 1) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    buttons: $("#dosubmit"),
                    onerror: "验证码错误",
                    onwait: "验证中"
                });
            })
            //-->
            $('#dosubmit').click(function() {
                var sex = "";

                if (document.getElementById("man").checked) {
                    sex = "男";
                }
                if (document.getElementById("woman").checked) {
                    sex = "女";
                }
                $.ajax({
                    type: 'POST',
                    url: '/index.php?m=guestbook&c=index&a=complain',
                    dataType: 'json',
                    data: {
                        title: $('#title').val(),
                        introduce: $('#introduce').val(),
                        name: $('#name').val(),
                        email: $('#email').val(),
                        tel: $('#tel').val(),
                        typeid: $('#typeid').val(),
                        sex: sex,
                        address: $('#city-picker3').val(),
                    },
                    success: function(data) {
                        alert(data['message']);
                    }
                })
            });
            </script>
        </div>
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