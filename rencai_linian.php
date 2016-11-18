<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16
 * Time: 14:13
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>玉林市思艺农牧科技有限公司</title>
    <meta name="description" content="玉林市思艺农牧科技有限公司，产品等等。_公司招聘" />
    <meta name="keywords" content="传感器、测量仪/测量传感器、测量系统、安全保护器、压力/流量/温度传感器、显微镜、控制系统(PLC、HMI、电机等)、图像处理/条码读取、激光打标机/激光刻印机、静电消除器、深圳市森美睿科技有限公司_公司招聘" />
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
            <div class="logo"><img src="images/logo.gif" width="269" height="76" alt="玉林市思艺农牧科技有限公司" /></div>
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

<center><div class="nybanner" style="background:url(images/zhaopinlogo.png) no-repeat center; width:1000px; height:300px;"></div>
</center>
<div class="main">
    <div class="main_01">
        <div class="left">
            <div class="lxwm_title">
                人才中心
            </div>
            <div class="zlm">
                <ul>

                    <li ><a href="rencai_linian.php"  >人才理念</a></li>

                    <li ><a href="rencai_zpzd.php"   style=" color:#FF0000">公司招聘</a></li>

                    <li ><a href="rencai_zhiwei.php"  >招聘职位</a></li>

                </ul>
            </div>
            <div class="lxwm_title">联系我们</div>
            <div class="lxwm_tex">
                <p><span style="font-family: 微软雅黑"><strong>玉林市思艺农牧科技有限公司</strong><br />
地址：广西玉林市大平山镇<br />
电话：0755-82597357<br />
传真：0755-27383735<br />
E-mail：szsmrkj@126.com</span></p>
            </div>
        </div><div class="right">
            <div class="right_01">
                <div class="right_01_title"><span>您当前所在位置：<a href="index.php">首页</a> &gt; 公司招聘</span>公司招聘</div>
                <div class="right_01_tex">
                    <div>

                        <div class="gsjj">
                            <div class="deta-Corp" style="border-bottom: 0px; border-left: 0px; padding-bottom: 0px; line-height: 25px; margin: 20px 0px 0px; outline-style: none; outline-color: invert; padding-left: 0px; outline-width: 0px; padding-right: 0px; font-family: arial, 宋体; color: rgb(75,75,75); font-size: 14px; border-top: 0px; border-right: 0px; padding-top: 0px">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;胜任本职工作就是人才，创新开拓就是优秀人才。这就是杭州公交总公司对人才最为基本的认识。
                                    人才是企业发展的重要财富，也是事业成败的关键。现在各行业对人才的要求越来越高，
                                    对此，我们始终加强企业人才队伍的建设，塑造一支适应于城市公共交通现代化要求的新型人才队伍，
                                    以增强企业应对现代化市场化发展的动力，适应不断增长的服务需求。尽管人们对人才存在的不同理解认识，
                                    但对杭州公共交通总公司来说，只要您具有优秀的人格，勤奋努力胜任本职工作，这就是企业优秀的人才。
                                    因而近年来，杭州公共交通总公司不断摆脱计划经济的羁绊，努力倡导“公交优秀，必须优秀”的经营理念，
                                    把人才队伍建设作为公交现代化的重要基础，积极培育人才，留住人才。
                                    一流的人才是建设一流企业的基础。
                                </p>
                                 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公交坚持“公交优先，必须优秀”的经营理念，始终把人才作为公交现代化建设的发展之本、竞争之本。
                                     通过多年的努力，杭州公交已经形成了敬人敬业、公平竞争、尊重知识和人才的良好企业氛围。
                                     让事业留住人才:坚持人才公平竞争的“赛马”机制。通过公平的“赛马”竞争，让人才脱颖而出，
                                     并委以重任，积极为人才创造一个公开、公平、公正的竞争发展环境；让待遇留住人才：
                                     建立吸纳和聚集人才的激励机制。建立激励机制，增强人才的内在动力，从改善福利、分配、
                                     精神三个方面构筑起用、留住人才的平台，通过建立企业特殊贡献奖、科技创新奖等，
                                     调动各类人才的积极性，建立发挥他们才能的激励制度和措施，确保他们才能的发挥；
                                     让优秀的企业文化留住人才：创造良好的企业文化氛围，不断强化企业内部的亲和力、
                                     凝聚力，在生活上、感情上以及文化氛围上为员工创造良好的条件。
                                 </p>                                
                            </div>
                        </div>
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
