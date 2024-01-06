<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Science Street</title>
    <meta name="description"
          content="Science Street is an Arab educational company that aims to make science learning more engaging and entertaining.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("favicon.ico")}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset("events/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/gijgo.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/slicknav.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/count.css")}}">
    <link rel="stylesheet" href="{{asset("events/css/style.css")}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="https://thesciencestreet.com/">
                                    <img src="../images/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="{{Route::currentRouteName() === "home" ? "active" : ""}}"><a
                                                href="https://thesciencestreet.com/">Home</a>
                                        </li>
                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#services"}}">Services</a>
                                        </li>
                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#about"}}">About
                                                Us</a></li>
                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#team"}}">Team</a>
                                        </li>
                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#achievements"}}">Achievements</a>
                                        </li>
                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#gallery"}}">Gallery</a>
                                        </li>

                                        <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#contact"}}">Contact</a>
                                        </li>
                                        <li class=" ">
                                            <a href="#">Events <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route("competition")}}">Competition</a></li>
                                                <li><a href="{{route("science.day")}}">Science Street Day</a></li>
                                                <li><a href="{{route("summer.camps")}}">Summer Camps</a></li>
                                                <li><a href="{{route("shows")}}">Shows </a></li>

                                            </ul>
                                        </li>
                                        <li class="ticket">
                                            <a class="disabled">Sold Out
                                            </a>
                                        </li>

                                    </ul>

                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end --><!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay mb-40">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="slider_text text-center">
                            <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">17 March ,
                                2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start  -->
<div class="about_area white_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-40">
                <div class="example">
                    <div id="flipdown" class="flipdown m-auto text-center"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title  mb-40">
                    <h4 class="text-center color">About Event</h4>
                    <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Science Street Day is an
                        event that will entail science activities tailored for all ages. The day will include a
                        science communication competition, a panel discussion about the Edutainment industry on
                        social media by social media figures, a science show, and an exceptional talk and
                        performance by the social media and TV figure Abdullah Anan. The day will be full of
                        surprises and an introduction to the scene of science communication and education industries
                        on social media.</p>

                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="about_thumb">
                    <div class="thumb_inner  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{asset("events/686-506 size.webp")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about_info pl-68">
                    <h4 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Objectives</h4>
                    <ul class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                        <li>Present Science Street
                            as a leading initiative in science communication in the Middle East.
                        </li>
                        <li>Introducing the partnership with Spacetoon.</li>
                        <li>Partner with regional institutions for future references and collaborations</li>
                        <li>Build our community hub for creating a strong action team to be used in other events and
                            freelancing opportunities.
                        </li>
                        <li>Introduce our themed shows as a trial of going globally.</li>
                    </ul>
                    <a target="_blank" class="ticket disabled wow fadeInLeft" data-wow-duration="1s"
                       data-wow-delay=".7s">
                        Sold out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end  -->

<div class="program_details_area  overlay2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80  wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".3s">
                    <h4>Schedule Details</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="program_detail_wrap">
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">1.00 -
                                        2.00 pm</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Registration
                                </h4>
                            </div>

                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">&nbsp; <br></h4>
                            <br>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">2.00 -
                                        2.10 pm</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                    Introduction
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">2.10 -
                                        3.30 pm</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Science Star
                                    competition
                                </h4>
                            </div>

                            <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"><br></h4> <br>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">3.40 -
                                        4.40 pm</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">Panel
                                    Discussion
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">4.40 -
                                        5.30 pm</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Break
                                </h4>
                            </div>
                            <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"><br></h4> <br>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">5:30 -
                                        7.00 pm</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">The Greatest
                                    Science Show
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">7.00 -
                                        7.30 pm</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Annan's Talk
                                </h4>
                            </div>
                            <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"><br></h4> <br>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                    <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">7:30 -
                                        8.00 pm</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">Winner's
                                    Announcement
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <!-- <div class="circle_img"></div> -->
                            <div class="porgram_top">
                                    <span class="wow fadeInRight" data-wow-duration="1s"
                                          data-wow-delay=".3s">&nbsp;</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                    &nbsp;
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map_area">
    <iframe style="position: relative; overflow: hidden;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.5898091600593!2d31.495776915492417!3d30.019932477059438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458225af8f916d1%3A0x75e8bf3141e205c7!2sThe%20American%20University%20in%20Cairo!5e0!3m2!1sen!2seg!4v1677368822512!5m2!1sen!2seg"
            width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="location_information white_bg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <h3>Science Day 2023</h3>
        <div class="info_wrap">
            <div class="single_info">
                <span>Venue:</span>
                <p>AUC New Cairo <br>Bassily Auditorium</p>
            </div>
            <div class="single_info">
                <span>WhatsaApp:</span>
                <span><a href="https://wa.me/message/L4JN2ZLJ5CIBG1">Chat on
                            WhatsApp</a></span>
            </div>
            <div class="single_info">
                <span>Email:</span>
                <p>contact@thesciencestreet.com</p>
            </div>
        </div>
    </div>
</div>
<div class="brand_area white_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Sponsored by </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div style="border-bottom: 1px solid rgba(255, 255, 255, 0.2)">
                    <div class="">
                        <div class="single_brand text-center">
                            <img src="{{asset("events/logo black.png")}}" alt="">
                            <img width="300px" src="{{asset("events/space toon.png")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand_area white_bg">
    <div class="container mb-40">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Organizing Partner</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div style="border-bottom: 1px solid rgba(255, 255, 255, 0.2)">
                    <div class="single_brand text-center">
                        <img src="{{asset("events/logo.png")}}" class="wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".4s" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 res-margin">
                    <ul class=" footer-icons">
                        <li><i class="fa-brands fa-whatsapp "></i><a target="_blank"
                                                                     href="https://wa.me/message/L4JN2ZLJ5CIBG1">Chat on
                                WhatsApp</a></li>
                        <li><i class="fa fa-envelope"></i>Email: <a
                                href="mailto:contact@thesciencestreet.com">contact@thesciencestreet.com</a></li>
                        <li><i class="fa fa-map-marker"></i>Sharjah , United Arab Emirates</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer_widget">
                        <div class="address_details text-center">
                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">17 March, 2023</h4>
                            <h3 class="wow fadeInUp mb-40" data-wow-duration="1s" data-wow-delay=".4s">AUC New
                                Cairo</h3>
                            <a class="ticket wow fadeInUp disabled " data-wow-duration="1s"
                               data-wow-delay=".6s">Sold out
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('images/var.png')}}" alt="" class=" center-block img-responsive">
                    <div class="social-media smaller">
                        <a href="https://www.tiktok.com/@annanscience" title="Tiktok Account"><i
                                class="fab fa-tiktok"></i></a>
                        <a href="https://www.facebook.com/annanscience" title="Facebook Account"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/science-street-llc/" title="Linkedin Account"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UCX9HpIfGNU_NZFigRcOlPbA"
                           title="Youtube Account"><i class="fa fa-youtube"></i></a>
                        <a href="https://www.instagram.com/sciencestreetofficial/" title="Instagram Account"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This
                        template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset("events/js/vendor/modernizr-3.5.0.min.js")}}"></script>
<script src="{{asset("events/js/vendor/jquery-1.12.4.min.js")}}"></script>
<script src="{{asset("events/js/popper.min.js")}}"></script>
<script src="{{asset("events/js/bootstrap.min.js")}}"></script>
<script src="{{asset("events/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("events/js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("events/js/ajax-form.js")}}"></script>
<script src="{{asset("events/js/waypoints.min.js")}}"></script>
<script src="{{asset("events/js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("events/js/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("events/js/scrollIt.js")}}"></script>
<script src="{{asset("events/js/jquery.scrollUp.min.js")}}"></script>
<script src="{{asset("events/js/wow.min.js")}}"></script>
<script src="{{asset("events/js/gijgo.min.js")}}"></script>
<script src="{{asset("events/js/nice-select.min.js")}}"></script>
<script src="{{asset("events/js/jquery.slicknav.min.js")}}"></script>
<script src="{{asset("events/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("events/js/tilt.jquery.js")}}"></script>
<script src="{{asset("events/js/plugins.js")}}"></script>
<script src="{{asset("events/js/flipdown.js")}}"></script>
<script src="https://kit.fontawesome.com/ffea153e43.js" crossorigin="anonymous"></script>


<script src="{{asset("events/js/main.js")}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        var countdays = 1679054400
        var flipdown = new FlipDown(countdays)

            .start()

            .ifEnded(() => {
            });

        // Toggle theme
        var interval = setInterval(() => {
            let body = document.body;
            body.classList.toggle('light-theme');
            body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
            body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
        }, 5000);


    });
</script>
</body>

</html>
