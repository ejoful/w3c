<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- saved from url=(0029)http://www.w3cschool.cn/html/ -->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HTML教程_w3cschool</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="keywords" content="HTML教程">
    <meta name="description" content="HTML 指超文本标签语言。
HTML 是通向 WEB 技术世界的钥匙。
在 W3CSchool 的 HTML 教程中，您将学习如何使用 HTML 来创建站点。
HTML 非常容易学习！你会喜欢它的！_来自HTML教程，w3cschool。">
    <link rel="stylesheet" href="/css/w3.css">
    <link rel="stylesheet" href="/css/project.css">
    <link rel="shortcut icon" href="/statics/images/favicon.ico">
    <link href="/css/default.css" rel="stylesheet" type="text/css">
    <script src="/js/push.js"></script>
    <script src="/js/hm.js"></script>
    <script src="/js/highlight.pack.js" type="text/javascript"></script>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="/js/share.js"></script>
    <style id="style-1-cropbar-clipper">
    /* Copyright 2014 Evernote Corporation. All rights reserved. */
        .en-markup-crop-options {
            top: 18px !important;
            left: 50% !important;
            margin-left: -100px !important;
            width: 200px !important;
            border: 2px rgba(255,255,255,.38) solid !important;
            border-radius: 4px !important;
        }

        .en-markup-crop-options div div:first-of-type {
            margin-left: 0px !important;
        }
    </style><link rel="stylesheet" href="/css/share_style2_16.css"></head>
<?php
if(!empty($this->params['bodyid'])) {
    $bodyid = $this->params['bodyid'];
} else {
    $bodyid = 'homefirst';
}
?>
<body id="<?= $bodyid ?>">
<?php $this->beginBody() ?>
<!--引入头部-->
<!--header start-->
<div id="header_item">
    <div id="header_index">
        <div id="header-l">
            <a href="http://www.w3cschool.cn/" title="w3cschool" class="logo"><img src="/images/header-logo.png" alt="W3Cschool"></a>
            <ul class="header-menu">
                <li><a href="<?= Url::to(['tutorial/index',]) ?>" title="编程入门教程">编程入门教程</a></li>
                <li><a href="http://www.w3cschool.cn/manual" title="开源文档">开源文档</a></li>
                <li><a href="http://www.w3cschool.cn/examples" title="编程实例">编程实例</a></li>
                <li><a href="http://www.w3cschool.cn/dict/" title="速查词典">速查词典</a></li>
                <li><a href="http://www.w3cschool.cn/exam/" title="编程题库">题库</a></li>
                <li class="dropdown"><a href="http://www.w3cschool.cn/html/#" class="dropbtn">更多 <i class="down-icon1 angle-down-icon"></i></a>
                    <div class="dropdown-content">
                        <a href="http://www.w3cschool.cn/codecamp/" title="编程实战训练">编程实战训练</a>
                        <a href="http://www.w3cschool.cn/question/" title="编程问答">编程问答</a>
                        <a href="http://www.w3cschool.cn/codedemo" title="代码实例">代码实例</a>
                        <a href="http://www.w3cschool.cn/position/positionlist" title="职位进阶">职位进阶</a>
                        <a href="http://www.w3cschool.cn/popularuser" title="排行榜">排行榜</a>
                    </div>
                </li>
            </ul>
        </div>
        <div id="header-r">
            <div class="searchbox">
                <form action="http://www.w3cschool.cn/search" target="_self">
                    <input type="text" name="w" class="box" id="searched_content" placeholder="输入关键字搜索...">
                    <button type="submit" class="button"></button>
                </form>
            </div>
            <div class="sig-box"><div><a href="http://www.w3cschool.cn/register?refer=/html" class="login-bg">注册</a> | <a href="http://www.w3cschool.cn/login?refer=/html">登录</a></div></div>
        </div>
    </div>
</div>
<div id="navfirst_item">
    <div id="navfirst">
        <ul id="menu">
            <li><a href="http://www.w3cschool.cn/" title="w3cschool首页"><i class="home-icon img-icon"></i>首页</a></li>
            <li><a href="http://www.w3cschool.cn/html/" title="HTML教程">HTML</a></li>
            <li><a href="http://www.w3cschool.cn/css/" title="CSS教程">CSS</a></li>
            <li><a href="http://www.w3cschool.cn/javascript/" title="Javascript教程">Javascript</a></li>
            <li><a href="http://www.w3cschool.cn/jquery/" title="Jquery教程">Jquery</a></li>
            <li><a href="http://www.w3cschool.cn/bootstrap/" title="Bootstrap教程">Bootstrap</a></li>
            <li><a href="http://www.w3cschool.cn/php/" title="PHP教程">PHP</a></li>
            <li><a href="http://www.w3cschool.cn/java/" title="Java教程">Java</a></li>
            <li><a href="http://www.w3cschool.cn/python/" title="Python教程">Python</a></li>
            <li><a href="http://www.w3cschool.cn/mysql/" title="MySQL教程">MySQL</a></li>
            <li><a href="http://www.w3cschool.cn/sql/" title="SQL教程">SQL</a></li>
            <li><a href="http://www.w3cschool.cn/json/" title="JSON教程">Json</a></li>
            <!--<li><a href="//www.w3cschool.cn/c/" title="C教程">C</a></li>-->
            <li><a href="http://www.w3cschool.cn/weixinapp/" title="微信小程序开发文档">微信小程序</a></li>
            <li><a href="http://123.w3cschool.cn/webtools" target="_blank" title="W3Cschool在线工具集合">在线工具</a></li>
            <li><a href="http://123.w3cschool.cn/" target="_blank" title="W3Cschool极客导航">极客导航</a></li>
            <!--<li><a href="//www.w3cschool.cn/position/positionList" title="职业路线">职业路线</a></li>-->
            <li><a href="http://www.w3cschool.cn/tutorial" title="编程入门教程">更多...</a></li>
        </ul>
    </div>
</div>
<script>
    var apppath = '/html';
    var domain  = '//www.w3cschool.cn';
</script>
<!--header end-->
<div id="wrapper" class="project-wrapper">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>


<!--footer start-->
<div id="footer_item">
    <div id="footer">
        <div class="footer-box">
            <div class="footer-title">网站相关</div>
            <div class="footer-items">
                <a href="http://www.w3cschool.cn/about/about.html">关于我们</a>
                <a href="http://www.w3cschool.cn/about/join.html">加入我们</a>
                <a href="http://www.w3cschool.cn/about/disclaimer.html">免责声明</a>
                <a href="http://www.w3cschool.cn/sitemap/">网站地图</a>
            </div>
        </div>
        <div class="footer-box">
            <div class="footer-title">内容专区</div>
            <div class="footer-items">
                <a href="http://www.w3cschool.cn/tutorial" title="编程入门教程">编程入门教程</a>
                <a href="http://www.w3cschool.cn/manual" title="技术文档参考手册">开源文档</a>
                <a href="http://www.w3cschool.cn/examples" title="在线实例">在线实例</a>
                <a href="http://www.w3cschool.cn/archives/" title="文章存档">文章存档</a>
            </div>
        </div>
        <div class="footer-box">
            <div class="footer-title">常用链接</div>
            <div class="footer-items">
                <a href="http://www.w3cschool.cn/tif2eq/index.html" target="_blank" title="使用帮助">使用帮助</a>
                <a href="http://123.w3cschool.cn/" title="技术学习极客导航">极客导航</a>
                <a href="http://wiki.w3cschool.cn/" target="_blank" title="编程百科">编程百科</a>
                <a href="http://m.w3cschool.cn/" target="_blank" title="w3cschool手机版">w3cschool手机版</a>
            </div>
        </div>
        <div class="footer-box">
            <div class="footer-title">联系我们</div>
            <div class="footer-items">
                <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=d308d977f1e630212a6c5412057c1784314d5ce64a287e02b4e7eabeb28b1f0d" ref="nofollow">官方QQ群：496712525</a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3265790599&amp;site=qq&amp;menu=yes" ref="nofollow">商务合作QQ：3265790599</a>
                <a target="_blank" href="http://www.w3cschool.cn/links" title="友情链接">友情链接QQ：3532917531</a>
            </div>
        </div>
        <div class="footer-box">
            <div class="tcode"><img src="./HTML教程_w3cschool_files/w3cschool.png" alt="微信订阅号" width="100" height="100"></div>
            <p class="tcode-txt">微信号：w3cschoolcn</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright©2016 亿动科技 <a href="http://www.w3cschool.cn/" title="w3cschool">w3cschool.cn </a> All Rights Reserved. 闽ICP备15016281号-3</p>
    </div>
</div>
<div class="bottom-tools" style="bottom: 40px;">
    <a id="scrollUp" href="javascript:;" title="飞回顶部" style="display: none;"></a>
    <a class="onlinenote" style="" title="在线笔记" href="javascript:;" data-module="page">在线笔记</a>
    <div class="qr-tool">二维码</div>
    <a id="feedback" class="webjy" title="建议反馈" href="javascript:;" data-module="page" onclick="showDialogBox(this)">建议反馈</a>
    <div class="qr-img"><img src="./HTML教程_w3cschool_files/w3cschool.jpg" alt="二维码"></div>
</div>

<div class="feedback-Box" style="display: none;">
    <div class="feedback-Box-content" style="width: 800px;">
        <div class="feedback-Box-top">
            <span class="feedback-Box-title">意见反馈</span>
            <span onclick="closeDialogBox(this)" class="feedback-Box-close">X</span>
        </div>
        <ul>
            <li class="feedback-box">
                <div id="feedbackRadio" type="radio" name="feedbackType" data-value="0" style=""> 意见反馈：</div>
                <textarea name="reportInfo" id="elmaaa" class="feedback-text" rows="15" placeholder="请留下您宝贵的意见反馈吧。" style="width: 700px;height:200px;overflow:auto;"></textarea>
                <p>联系方式：</p>
                <input type="text" placeholder="留个联系方式呗..." name="reportAddress" class="radio-text" id="reportAddress" style="height: 30px;width: 200px;">
            </li>
        </ul>
        <button class="search-s" onclick="dialogSubmit(this)" id="reportSubmit">提交</button>
    </div>
</div>

<div id="note-start" style="display: none"></div>

<div id="detail" style="display:none;">
    <div id="note-Dialog" class="note-Dialog">

        <div class="note-Box-content">
            <div class="ntitlebox">
                <input type="text" placeholder="" name="ntitle" class="ntitle" id="ntitle">
            </div>
            <div id="editorarea">
                <textarea name="ncontent" id="ncontent" class="ncontent" rows="15" placeholder="" style="width: 700px;height:200px;overflow:auto;"></textarea>
            </div>
            <p></p>
            <a class="closenote" href="http://www.w3cschool.cn/my/note" target="_blank">查看完整版笔记</a>
            <button class="notesubmit" id="notesubmit">保存</button>
            <button class="notebtn pull-right closenote" style="margin:20px 0">关闭</button>
        </div>
    </div>
</div>
<!--footer end-->
<div class="widget-body" data-type="project"><div class="widget-main" style=""><div class="widget-box"><div class="slogn">Hi，看起来你挺喜欢这些内容，但是你还没有注册帐号！当你创建了帐号，你可以收藏感兴趣的内容，并记录你的阅读状态！</div><div class="quicklogin quick-box"><a href="http://www.w3cschool.cn/register?refer=/html">立即注册</a></div><div class="sig-group"><a href="http://www.w3cschool.cn/login?refer=/html">已有账号，登录</a></div></div><a class="widget-box-close" href="javascript:;" title="关闭">X</a></div></div>
<script src="/js/shCore.js" type="text/javascript"></script>
<script src="/js/commonfooter.js" type="text/javascript"></script>
<span style="display:none;" id="cnzz_stat_icon_1259964532">
    <a href="http://www.cnzz.com/stat/website.php?web_id=1259964532" target="_blank" title="站长统计">站长统计</a>
</span>
<script src="/js/z_stat.js" type="text/javascript"></script>
<script src="/js/core.js" charset="utf-8" type="text/javascript"></script>
<script src="/js/ajaxdo.core.js" type="text/javascript"></script>
<script>
    var kn = {
        ismenu:'',
        pename:'html',
        kename:'',
    };
    $(function(){

        $(".onlinenote").show();

        var kename = kn.kename;
        var fid    = "";
        var uid = '0';
// SyntaxHighlighter.config.clipboardSwf = '/plugins/ueditor/third-party/zeroclipboard/ZeroClipboard.swf';
// SyntaxHighlighter.all();//代码高亮
        /*开启计时 准备记录积分*/
        var vcreditfull = $.cookie('ypre_vcreditfull');
//console.log(vcreditfull);
        if(vcreditfull == undefined && uid != '0' && uid != ''){
            setTimeout(function(){
                $.ajax({
                    url:"/project/setViewCredit",
                    type:"post",
                    data:{kename:kename},
                    dataType:"json",
                    success:function(msg){
                        var statusCode = {
                            '200':'success',
                            '400':'warning',
                        };
                        var toastrType = statusCode[msg.statusCode];
                        if(msg.statusCode == 300 || msg.statusCode == 400){
                            return;
                        }
                        toastr[toastrType](msg.message);
                    }
                });
            },30000);
        }
        hljs.initHighlightingOnLoad();//高亮代码
// // 上一篇 下一篇
// if(fid == "-1"){
// $(".prenext").parent().remove();
// }else{
        var el = $(".dd-item[data-id="+kename+"]");
// var prevel = el.prev();
// var nextel = el.next();
        //  var prev = prevel.find('a')[0];
        //  var next = nextel.find('a')[0];
//  if(prev == undefined){
        //     prev = el.parents(".dd-list").prev().find('a')[0];
        //  }
        //  if(next == undefined){
        //     next = el.parents(".dd-item").next().find('a')[0];
        //  }
//  if(prevel.attr("ismenu") == 1){
        //  prev = prevel.find
        //  }
//  if($(prev).length < 1){
        //    $(".previous-link").hide();
        //  }else{
        //    //$(prev).clone().appendTo(".previous-link");
        //    $(".previous-link > a").attr("href",$(prev).attr("href")).attr("title",$(prev).attr("title"));
        //    $(".previous-link").show();
//  }
//  if($(next).length < 1){
        //    $(".next-link").hide();
        //  }else{
        //    $('.next-link > a').attr("href",$(next).attr("href")).attr("title",$(next).attr("title"));
        //    $(".next-link").show();
        //  }
// }
//当文章为文件夹的时候 并且内容为空的时候显示文件夹内部文章列表
        if($(".view-box").html() == "" && kn.ismenu == 1){
            $(el).clone().appendTo(".view-box");
            $(".view-box").find(".dd-content").removeClass("folder-open").removeClass("folder-close").css({"background-color":"#fff"});
        }
// $(".dd-content[class*=folder-]").click(function(){
//     var obj = $(this);
//     if(obj.hasClass("folder-open")){
//         obj.removeClass("folder-open");
//         obj.addClass("folder-close");
//         obj.next().hide();
//     }else{
//         obj.removeClass("folder-close");
//         obj.addClass("folder-open");
//         obj.next().show();
//     }
// });
    });


    function getviewkn(){
        var usernamestr ='';
        $.ajax({
            url:"/my/knowledge/getViewkn?pename="+kn.pename,
            dataType:"json",
            success:function(msg){
                var objli,objtt;
                for(var p in msg){
                    objli = $("#nestable_handbook").find(".dd-item[data-id='"+msg[p]['kename']+"']");
                    if(objli.attr("ismenu") != 1){
                        objli.addClass("readed").find("a").attr("title","上次浏览时间:("+msg[p]['lasttime']+")");
                    }
                }
            }
        });

    }

    // 新|旧版预览 切换
    function newversion(){

        var isNewVersion = $.cookie("newversion");
        if(isNewVersion == 1){
            $.cookie("newversion",0,{path:'/'});
        }else{
            $.cookie("newversion",1,{path:'/'});
        }

        window.location.reload();

    }

    function islike(){
        $.ajaxdo({
            url: "/project/islikeKn",
            type: "post",
            dataType: 'json',
            data: {"pename":'',"kename": ''},
            sync: false,
            success: function (data) {
                if (data.statusCode == 200) {
                    $('.avatar-list').find('p').remove();
                    $('.avatar-list').append('<a href="/u/' + data.data + '" title="' + data.data + '"><img src="/attachments/avatar/avatar_' + data.data + '.jpg" title=""></a>');
                    var likecount = $("#likecount").text() * 1 + 1;
                    $("#likecount").html(likecount);
                    $(".btn-thumbs-up i").attr('class','thumbs-up-icon-isdone');
                    $("#likestatus").html('已赞');
                    toastr.success(data.message,'',{"positionClass": "toast-top-center"});
                } else {
                    toastr.warning(data.message,'',{"positionClass": "toast-top-center"});
                }
            }
        });
    }

    function isstar(){
        var type = $('#hbstar').attr('data-type');
        $.ajaxdo({
            url: "/project/tempStar",
            type: "post",
            dataType: 'json',
            data: {
                kename:'',
                pename:'',
                ktype:'',
            },
            success: function (data) {
                if(data.statusCode == 200){
                    if (type == 'star') {
                        $('#hbstar').html('<i class="star-icon-isdone"></i><span>已收藏</span>');
                        $('#hbstar').attr('data-type','rstar');
                        toastr.success(data.message,'',{"positionClass": "toast-top-center"});
                    } else {
                        $('#hbstar').html('<i class="star-icon"></i><span>收藏</span>');
                        $('#hbstar').attr('data-type','star');
                        toastr.success(data.message,'',{"positionClass": "toast-top-center"});
                    }
                }else{
                    toastr.warning(data.message,'',{"positionClass": "toast-top-center"});
                }
            }
        });
    }
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>