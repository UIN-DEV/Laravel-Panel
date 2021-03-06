<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, assets/home, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab assets/home | Home</title>


    {{HTML::style('assets/home/css/bootstrap.min.css')}}
    {{HTML::style('assets/home/css/theme.css')}}
    {{HTML::style('assets/home/css/bootstrap-reset.css')}}

    {{HTML::style('assets/home/assets/font-awesome/css/font-awesome.css')}}
    {{HTML::style('assets/home/css/flexslider.css')}}
    {{HTML::style('assets/home/assets/bxslider/jquery.bxslider.css')}}
    {{HTML::style('assets/home/assets/revolution_slider/css/rs-style.css')}}

    {{HTML::style('assets/home/assets/revolution_slider/rs-plugin/css/settings.css')}}
    {{HTML::style('assets/home/css/style.css')}}
    {{HTML::style('assets/home/css/style-responsive.css')}}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">CAHYO<span>LABS</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Service</a></li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Price</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

     <!-- revolution slider start -->
     <div class="fullwidthbanner-container main-slider">
         <div class="fullwidthabnner">
             <ul id="revolutionul" style="display:none;">
                 <!-- 1st slide -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                     <div class="caption lfl slide_item_left"
                          data-x="10"
                          data-y="70"
                          data-speed="400"
                          data-start="1500"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/ban2.png')}}" alt="Image 1">
                     </div>
                     <div class="caption lfr slide_title"
                          data-x="670"
                          data-y="120"
                          data-speed="400"
                          data-start="1000"
                          data-easing="easeOutExpo">
                         Clean & Creative
                     </div>

                     <div class="caption lfr slide_subtitle dark-text"
                          data-x="670"
                          data-y="190"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutExpo">
                         A Responsive assets/home Template
                     </div>
                     <div class="caption lfr slide_desc"
                          data-x="670"
                          data-y="260"
                          data-speed="400"
                          data-start="2500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>
                     <a class="caption lfr btn yellow slide_btn" href="http://thevectorlab.net/flatlab" target="_blank"
                        data-x="670"
                        data-y="400"
                        data-speed="400"
                        data-start="3500"
                        data-easing="easeOutExpo">
                         Watch Dashboard
                     </a>

                 </li>

                 <!-- 2nd slide  -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                     <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                     <img src="{{asset('assets/home/img/banner/banner_bg.jpg')}}" alt="">
                     <div class="caption lft slide_title"
                          data-x="10"
                          data-y="125"
                          data-speed="400"
                          data-start="1500"
                          data-easing="easeOutExpo">
                         YAHOOOOO. TWO IN ONE
                     </div>
                     <div class="caption lft slide_subtitle dark-text"
                          data-x="10"
                          data-y="180"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutExpo">
                         assets/home & Fronend in a single bundle
                     </div>
                     <div class="caption lft slide_desc dark-text"
                          data-x="10"
                          data-y="240"
                          data-speed="400"
                          data-start="2500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>
                     <a class="caption lft slide_btn btn red slide_item_left" href="#" target="_blank"
                        data-x="10"
                        data-y="360"
                        data-speed="400"
                        data-start="3000"
                        data-easing="easeOutExpo">
                         Purchase Now
                     </a>
                     <div class="caption lft start"
                          data-x="640"
                          data-y="55"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutBack"  >
                         <img src="{{asset('assets/home/img/banner/man.png')}}" alt="man">
                     </div>
                     <div class="caption lft slide_item_right"
                          data-x="330"
                          data-y="20"
                          data-speed="500"
                          data-start="5000"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/test_man.png')}}" id="rev-hint2" alt="txt img">
                     </div>

                 </li>

                 <!-- 3rd slide  -->
                 <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="">
                     <img src="{{asset('assets/home/img/banner/red-bg.jpg')}}" alt="">
                     <div class="caption lfl slide_item_right"
                          data-x="10"
                          data-y="105"
                          data-speed="1200"
                          data-start="1500"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/imac.png')}}" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="25"
                          data-y="345"
                          data-speed="1200"
                          data-start="2000"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/tab.png')}}" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="200"
                          data-y="330"
                          data-speed="1200"
                          data-start="2500"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/mobile.png')}}" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="250"
                          data-y="230"
                          data-speed="1200"
                          data-start="3000"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/laptop.png')}}" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="165"
                          data-y="30"
                          data-speed="500"
                          data-start="5000"
                          data-easing="easeOutBack">
                         <img src="{{asset('assets/home/img/banner/text_imac.png')}}" id="rev-hint1" alt="Image 1">
                     </div>

                     <div class="caption lfr slide_title slide_item_left yellow-txt"
                          data-x="670"
                          data-y="145"
                          data-speed="400"
                          data-start="3500"
                          data-easing="easeOutExpo">
                         Full Responsive
                     </div>
                     <div class="caption lfr slide_subtitle slide_item_left"
                          data-x="670"
                          data-y="200"
                          data-speed="400"
                          data-start="4000"
                          data-easing="easeOutExpo">
                         And Awesome Flat Design
                     </div>
                     <div class="caption lfr slide_desc slide_item_left"
                          data-x="670"
                          data-y="280"
                          data-speed="400"
                          data-start="4500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>


                 </li>

             </ul>
            <div class="tp-bannertimer tp-top"></div>
         </div>
     </div>
     <!-- revolution slider end -->

     <div class="container">
         <!--clients start-->
         <div class="clients">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center">
                         <ul class="list-unstyled">
                             <li><a href="#"><img src="{{asset('assets/home/img/clients/logo1.png')}}" alt=""></a></li>
                             <li><a href="#"><img src="{{asset('assets/home/img/clients/logo2.png')}}" alt=""></a></li>
                             <li><a href="#"><img src="{{asset('assets/home/img/clients/logo3.png')}}" alt=""></a></li>
                             <li><a href="#"><img src="{{asset('assets/home/img/clients/logo4.png')}}" alt=""></a></li>
                             <li><a href="#"><img src="{{asset('assets/home/img/clients/logo5.png')}}" alt=""></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <!--clients end-->
     </div>

     <!--container end-->

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h1>contact info</h1>
                    <address>
                        <p>Address: Jl. Joyosuko G 3 No 7</p>
                        <p>Merjosari Malang, Indonesia</p>

                        <p>Phone : (+62) 82301290429</p>
                        <p>Email : <a href="javascript:;">cahyo.mamen@gmail.com</a></p>
                    </address>
                </div>
                <div class="col-lg-5 col-sm-5">
                    <h1>latest tweet</h1>
                    <div class="tweet-box">
                        <i class="icon-twitter"></i>
                        <em>Please follow <a href="javascript:;">@gauscahyono</a> for all future updates of us! <a href="javascript:;">twitter.com/gauscahyono</a></em>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                    <h1>stay connected</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    {{HTML::script('assets/home/js/jquery.js')}}
    {{HTML::script('assets/home/js/jquery-1.8.3.min.js')}}
    {{HTML::script('assets/home/js/bootstrap.min.js')}}
    {{HTML::script('assets/home/js/jquery.easing.min.js')}}
    {{HTML::script('assets/home/js/link-hover.js')}}
    {{HTML::script('assets/home/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')}}
    {{HTML::script('assets/home/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}
    {{HTML::script('assets/home/js/common-scripts.js')}}
    {{HTML::script('assets/home/js/revulation-slide.js')}}

  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

  </script>

  </body>
</html>
