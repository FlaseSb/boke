<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Bootstrap -->
<link href="/boke/Public/Home/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/boke/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/boke/Public/Commit/css/commit.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="/boke/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="/boke/Public/Home/js/jquery.min.js"></script>
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
            <a href="index.html"><img src="/boke/Public/Home/images/logo.png" alt="" class="responsive"/></a>
        </div>
        <nav class="top-nav" style="float:left">
            <ul class="top-nav nav_list" style="float:left">
                <li><a href="portfolio.html">微语</a></li>
                <li class="page-scroll"><a href="#about">关于</a></li>
                <li class="page-scroll"><a href="blog.html">博客</a></li>
                <li class="page-scroll"><a href="#contact">联系</a></li>
            </ul>
            <div style="float:right;line-height: 50px;color:white;margin-left:40px">
                注册
            </div>
            <div style="float:right;line-height: 50px;color:white">
                <a href="<?php echo U('Login/index');?>" title="">登录</a>
            </div>
            <a href="#" id="pull"><img src="/boke/Public/Home/images/nav-icon.png" title="menu" /></a>
        </nav>
        <div class="clearfix"></div>
    </div>
</div>
</div>



<div class="slider_bg"><!-- start slider -->
<div class="container">
        <div class="row slider">
        <div class="wmuSlider example1"><!-- start wmuSlider example1 -->
               <div class="wmuSliderWrapper">
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="slider_img text-center">
                            <ul class="list-unstyled list_imgs">
                                <li><img src="/boke/Public/Home/images/slider.jpg" alt="" class="responsive"/></li>
                            </ul>
                        </div>
                   </article>
                   <article style="position: relative; width: 100%; opacity: 1;"> 
                        <div class="slider_img text-center">
                            <ul class="list-unstyled list_imgs">
                                <li><img src="/boke/Public/Home/images/slider1.jpg" alt="" class="responsive"/></li>
                            </ul>
                        </div>
                   </article>
                 </div>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                </ul>
            <script src="/boke/Public/Home/js/jquery.wmuSlider.js"></script> 
             <script>
                 $('.example1').wmuSlider();         
            </script>
        </div><!-- end wmuSlider example1 -->
        <div class="clearfix"></div>
      </div>
</div>
</div>
<div class="main_bg"  id="about"><!-- start about us -->
<div class="container">
    <div class="row about">
        <div class="col-md-3 about_img">
            <img src="/boke/Public/Home/images/user.png" alt="" class="responsive"/>
        </div>
        <div class="col-md-9 about_text">
            <h3>LGG</h3>
            <h4></h4>
            <p></p>
            <div class="soc_icons navbar-right">
                <ul class="list-unstyled text-center">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>   
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer_bg" id="contact"><!-- start footer -->
<div class="container">
    <div class="row footer">
        <div class="col-md-8 contact_left">
            <h3>get in touch</h3>
            <p>In order to get in touch use the contact form below:</h4>
            <form method="post" action="contact-post.html">
                <input type="text" value="Name (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" value="Email (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
                <input type="text" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
                <textarea onFocus="if(this.value == 'Your Message here....') this.value='';" onBlur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
                <span class="pull-right"><input type="submit" value="submit us"></span>
            </form>
        </div>
        <div class="col-md-4  contact_right">
            <p><span>Lorem Ipsum is simply dummy text: </span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            <ul class="list-unstyled address">
                <li><i class="fa fa-map-marker"></i><span>500 Lorem Ipsum Dolor Sit,</span></li>
                <li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
                <li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>
            </ul>
        </div>      
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