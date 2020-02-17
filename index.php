<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <title>网易云音乐热评</title>
    <!--强制极速模式模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动适配-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--UC强制全屏-->
    <meta name="full-screen" content="yes">
    <!--UC应用模式-->
    <meta name="browsermode" content="application">
    <!--QQ强制全屏-->
    <meta name="x5-fullscreen" content="true">
    <!--QQ应用模式-->
    <meta name="x5-page-mode" content="app">
    <!--删除默认的苹果工具栏和菜单栏-->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--Cache-Control头域-->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <!--网站关键词-->
    <meta name="keywords" content="">
    <!--网站描述-->
    <meta name="description" content="">
    <!--favicon-->
    <link rel="shortcut icon" href="https://s1.music.126.net/style/favicon.ico?v20180823">
    <!--主体css-->
    <link rel="stylesheet" href="../baoguo.css?<?php echo time(); ?>">
    <!--loading-->
    <link rel="stylesheet" href="../loading.css?<?php echo time(); ?>">
    <!--baoguo_icon字体图标-->
    <!-- <link rel="stylesheet" type="text/css" href="../plugins/baoguo_icon/baoguo_icon.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget/autoload.js"></script>
</head>

<body>
<div class="box">
    <div id="search_button">
        <!--歌曲封面-->
        <div id="pic"><img src=""></div>
        <!--播放按钮-->
        <div id="player_btn"><img src="../play.png"></div>
    </div>
    <div id="info_top">
        <!--歌曲名-->

        <div id="info_song"></div>
        <!--歌曲作者-->
        <div id="info_song_auther"></div>
        <!--水波-->
        <div class="watertiv">
            <div class="water_1"></div>
            <div class="water_2"></div>
            
        </div>
    </div>
    <div class="info">
        <!--评论-->
        <div id="info_tag"></div>
    </div>
    <!--切换下一条-->
<br/>


    <div class="info_xyt" style="border-radius: 20px;margin-top: 10px;text-align: center;">
       
        <a id="next" style="font-size: 13px;">----  切换下一条  ----</a>
    </div>
    <!--版权-->
<br/>
    <div id="about"style="border-radius: 20px;margin-top: 10px;text-align: center;"><a href="https://music.163.com/#/user/home?id=309603360" target="_blank">点击去关注</a>
    </div>
</div>
<!--audio-->
<div id="music" style="display: none"></div>
<!--背景-->
<div class="bg_image"></div>
<div class="bg_image_pattern"></div>
<!--loading-->




<!--jQuery-->
<script type="text/javascript" src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
<!--核心js-->
<script type="text/javascript" src="../baoguo.js?<?php echo time(); ?>"></script>
</body>

</html>