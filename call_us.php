<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16
 * Time: 14:13
 */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>玉林市思艺农牧科技有限公司</title>
    <meta name="description" content="玉林市思艺农牧科技有限公司，生产各种特殊农产品。产品等等。_联系方式" />
    <link href="css/style.css" rel="stylesheet" media="screen" type="text/css" /><!--[if lt IE 7]>
    <script type="text/javascript" src="unitpngfix.js"></script>
    <![endif]-->
</head>
<body>



<script type="text/javascript" src="js/jquery.js"/></script>
<script type="text/javascript">
    function banner(){
        var bn_id = 0;
        var bn_id2= 1;
        var speed33=5000;
        var qhjg = 1;
        var MyMar33;
        $("#banner .d1").hide();
        $("#banner .d1").eq(0).fadeIn("slow");
        if($("#banner .d1").length>1)
        {
            $("#banner_id li").eq(0).addClass("nuw");
            function Marquee33(){
                bn_id2 = bn_id+1;
                if(bn_id2>$("#banner .d1").length-1)
                {
                    bn_id2 = 0;
                }
                $("#banner .d1").eq(bn_id).css("z-index","2");
                $("#banner .d1").eq(bn_id2).css("z-index","1");
                $("#banner .d1").eq(bn_id2).show();
                $("#banner .d1").eq(bn_id).fadeOut("slow");
                $("#banner_id li").removeClass("nuw");
                $("#banner_id li").eq(bn_id2).addClass("nuw");
                bn_id=bn_id2;
            };

            MyMar33=setInterval(Marquee33,speed33);

            $("#banner_id li").click(function(){
                var bn_id3 = $("#banner_id li").index(this);
                if(bn_id3!=bn_id&&qhjg==1)
                {
                    qhjg = 0;
                    $("#banner .d1").eq(bn_id).css("z-index","2");
                    $("#banner .d1").eq(bn_id3).css("z-index","1");
                    $("#banner .d1").eq(bn_id3).show();
                    $("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
                    $("#banner_id li").removeClass("nuw");
                    $("#banner_id li").eq(bn_id3).addClass("nuw");
                    bn_id=bn_id3;
                }
            })
            $("#banner_id").hover(
                function(){
                    clearInterval(MyMar33);
                }
                ,
                function(){
                    MyMar33=setInterval(Marquee33,speed33);
                }
            )
        }
        else
        {
            $("#banner_id").hide();
        }
    }
</script>
<div class="header">
    <div class="top">
        <div class="top_01">
            <div class="logo"><img src="images/logo.gif" width="269" height="76" alt="深圳市森美睿科技有限公司" /></div>
            <div class="top_01_r">

                <div class="jrsc"><a href="javascript:void(0)" onclick="shoucang(document.title,window.location)">加入收藏</a>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" onclick="SetHome(this,window.location)">设为首页</a>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="gsjj.php?id=371">联系我们</a></div>
                <div class="tel"><img src="images/tel.png" width="202" height="27" /></div>

            </div>
        </div>
        <div class="nav">
            <div class="nav_l">
                <ul>
                    <li style="background:url(images/fangzi.png) no-repeat left"><a href="index.php">首页</a></li>
                    <li><a href="product.php">产品中心</a></li>
                    <li><a href="aboutsy.php">关于思艺</a></li>
                    <li><a href="rencai_zp.php">人才招聘</a></li>
                    <li><a href="call_us.php">联系我们</a></li>
                </ul>
            </div>
            <div class="nav_r">

                <form id="form1" name="form1" method="post" action="scpro.php">
                    <div class="nav_r_l">
                        <input type="text" name="p_name" id="p_name" style="border:0px;" />
                    </div>

                    <div class="nav_r_r">

                        <input type="image" name="imageField" src="images/ss.jpg" />

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<center><div class="nybanner" style="background:url(images/callus.png) no-repeat center; width:1000px; height:300px;"></div>
</center>
<div class="main">
    <div class="main_01">
        <div class="left">
            <div class="lxwm_title">
                联系我们
            </div>
            <div class="zlm">
                <ul>

                    <li ><a href="#"   style=" color:#FF0000">联系方式</a></li>

                    <li ><a href="#"  >客户留言</a></li>

                    <li ><a href="index.php"  >关注我们</a></li>

                </ul>
            </div>
            <div class="lxwm_title">联系我们</div>
            <div class="lxwm_tex">
                <p><span style="font-family: 微软雅黑"><strong>玉林市思艺农牧科技有限公司</strong><br />
地址：广西玉林市大平山镇<br />
电话：0775-88888888<br />
传真：0775-88888888<br />
E-mail：szsmrkj@126.com</span></p>
            </div>
        </div><div class="right">
            <div class="right_01">
                <div class="right_01_title"><span>您当前所在位置：<a href="index.php">首页</a> &gt; 联系方式</span>联系方式</div>
                <div class="right_01_tex">
                    <div>

                        <div class="gsjj">
                            <p><span style="font-family: 微软雅黑">电话：0775-8888888 <br />
<br />
传真：0775-88888888&nbsp; <br />
<br />
E-mail：@126.com<br />
<br />
地址：<span style="font-size: 13px"><span style="text-indent: 0pt; color: windowtext; vertical-align: baseline">广西玉林市大平山镇</span><span style="text-indent: 0pt; color: windowtext; vertical-align: baseline">座</span><span style="text-indent: 0pt; color: windowtext; vertical-align: baseline">1805室。</span></span></span></p>
                            <p>&nbsp;</p>
                            <p><span style="font-family: 微软雅黑"><span style="font-size: 13px"><span style="text-indent: 0pt; color: windowtext; vertical-align: baseline"><img alt="" width="700" height="354" src="images/siyi.png" /></span></span></span></p></div>
                    </div>







                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="foot">
    <p>玉林思艺农牧科技有限公司 地址：广西玉林大平山镇<br />
        电话：8888888 &nbsp;传真：0775-8888888&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 技术支持：<a href="http://www.easy-biz.cn" style="color:#FFFFFF">易商网</a>&nbsp;&nbsp;</p>
</div>
<script type="text/javascript">
    // 设置为主页
    function SetHome(obj,vrl){
        try{
            obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
        }
        catch(e){
            if(window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage',vrl);
            }else{
                alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。");
            }
        }
    }
    // 加入收藏 兼容360和IE6
    function shoucang(sTitle,sURL)
    {
        try
        {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e)
        {
            try
            {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e)
            {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }
</script>




</body>
</html>

