<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Bootstrap -->
<link href="/Public/Home/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
    <script>
        $(function() {
            var pull        = $('#pull');
                menu        = $('nav ul');
                menuHeight  = menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
<!----font-Awesome----->
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg" id="home"><!-- start header -->

<div class="container">
    <div class="row header text-center specials">
        <div class="h_logo">
            <a href="index.html"><img src="/Public/Home/images/logo.png" alt="" class="responsive"/></a>
        </div>
        <nav class="top-nav">
            <ul class="top-nav nav_list">
                <li><a href="portfolio.html">微语</a></li>
                <li class="page-scroll"><a href="#about">关于</a></li>
                <li class="logo page-scroll"><a title="hexa" href="index.html"><img src="/Public/Home/images/logo.png" alt="" class="responsive"/></a></li>
                <li class="page-scroll"><a href="blog.html">博客</a></li>
                <li class="page-scroll"><a href="#contact">联系</a></li>
            </ul>
            <a href="#" id="pull"><img src="/Public/Home/images/nav-icon.png" title="menu" /></a>
        </nav>
        <div class="clearfix"></div>
    </div>
</div>
</div>


        
    
<div class="footer1_bg"><!-- start footer1 -->
    <div class="container">
        <div class="row  footer">
            <div class="copy text-center">
                <p class="link"><span>looksage</span></p>
                <a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>
        </div>
        <script type="text/javascript">
                $(function() {
                  $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            
                      var target = $(this.hash);
                      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                      if (target.length) {
                        $('html,body').animate({
                          scrollTop: target.offset().top
                        }, 1000);
                        return false;
                      }
                    }
                  });
                });
        </script>
        <!---- start-smoth-scrolling---->       
    </div>
</div>

</body>
</html>