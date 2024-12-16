<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="Science Street is an Arab educational company that aims to make science learning more engaging and entertaining.">
    <meta name="author" content="Esraa">
    <!-- Page title -->
    <title>Science Street</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/site.webmanifest")}}">
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{asset("fonts/flaticons/flaticon.css")}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Cairo:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("layerslider/css/layerslider.css")}}">
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    <link href="{{asset("styles/maincolors.css")}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<div id="page-width">
    <div id="layerslider">
        <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
            <img src="{{asset("events/img/Slider.webp")}}" loading="lazy" class="ls-bg" alt="Slide background"/>
            <div class="ls-l header-text"
                 data-ls="offsetxin:0;durationin:2000;delayin:200;easingin:easeInOutExpo;rotatexin:100;scalexin:0.8;scaleyin:0.8;transformoriginin:50% 50% -150;offsetxout:0;durationout:500;rotatexout:-20;scalexout:0.8;scaleyout:0.8;transformoriginout:50% 50% -150;">
                <h1>Science Street Summer Camps </h1>

                <div class="page-scroll hidden-xs ">
                    <a class="btn contact" href="/">Contact us</a>
                </div>
            </div>
        </div>
        <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
            <img src="{{asset("events/img/Slider2.webp")}}" loading="lazy" class="ls-bg" alt="Slide background"/>
        </div>
    </div>
    @include("components.nav")
    <div class="container-fluid">
    </div>
    <section id="about" class="container-fluid">
        <div class="section-heading">
            <h2>About Summer Camps</h2>
            <div class="hr camp"></div>
        </div>
        <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatey( 40%);"
             data-center-center="transform:translatey(-60%);">
            <img src="{{asset("images/2.png")}}" loading="lazy" alt="">
        </div>
        <div class="container">
            <div class="col-md-12 col-centered">
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs " role="tablist">
                        <li role="presentation" class="active"><a href="#Section1" role="tab"
                                                                  data-toggle="tab">About</a></li>
                        <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Objectives </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active in fade col-lg-12" id="Section1">
                            <div class="col-lg-6">
                                <p>Science Street’s Camp is an experience that promises to evoke creativity in all
                                    children. We teach children different educational aspects, through Robotics,
                                    Space, Engineering and Biology. We are committed to providing opportunities for
                                    discovery and experiential learning that fit with the evolving needs of our
                                    community through thematic weeks,. Our campers will embark on an educational
                                    experience that will spark their love for learning.
                                </p>
                            </div>
                            <div class="col-lg-6 res-margin">
                                <img src="{{asset("events/img/About Summer Camp.webp")}}" loading="lazy"
                                     class="img-curved  center-block img-responsive"/>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade col-lg-12" id="Section2">
                            <div class="col-lg-5 ">
                                <img src="{{asset("events/img/800800-obj.webp")}}" alt="" loading="lazy"
                                     class="img-curved center-block img-responsive"/>
                            </div>
                            <div class="panel-group col-lg-7 " id="accordion">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h6 class="panel-title res-margin">
                                            <a class="accordion-toggle" data-toggle="collapse"
                                               data-parent="#accordion" href="#">Objectives</a>
                                        </h6>
                                    </div>
                                    <div id="" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul class="custom no-margin">
                                                <li> Introduce students to scientific careers and the potential
                                                    impact of
                                                    science on society.
                                                </li>
                                                <li> provide opportunities for students to build confidence,
                                                    self-esteem, and leadership skills through scientific inquiry
                                                    and exploration
                                                </li>
                                                <li>Promote diversity and inclusion in STEM fields, So Children will
                                                    learn about mysteries of medical science, discover the beyond of
                                                    the space and wonders of coding and technology.
                                                </li>
                                                <li>Provide exposure to real-world applications and to introduce
                                                    students to various scientific disciplines such as biology,
                                                    physics, chemistry, and environmental science.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="small-section bg-color1">
        <div class="container text-center text-light">
            <div class="col-md-2">
                <h4>This year's camp themes</h4>
            </div>
            <div class="col-md-10">
                <ul class="nav nav-pills page-scroll ">
                    <li><a href="#ScienceExplores">Science Explores</a></li>
                    <li><a href="#FutureCity">Future City</a></li>
                    <li><a href="#FutureInventors">Future Inventors</a></li>
                    <li><a href="#IOT">IOT at Home</a></li>
                    <li><a href="#GalaxyExplorers">Galaxy Explorers</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="ScienceExplores" class=" margin1">
        <div class="container">
            <div class="col-lg-12 col-md-12 ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 panel">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion">Science Explores: Age ( 5 to 9 yrs).</a>
                                </h6>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Science explorers camp is a program designed for little kids interested
                                        in
                                        science, technology, engineering, and mathematics (STEM) subjects. The
                                        camp
                                        typically runs for several days or weeks, and participants are usually
                                        divided into groups according to their age or interests. The camp aims
                                        to
                                        provide a fun and engaging learning experience for young people,
                                        encouraging
                                        them to explore their interests and develop their skills in STEM fields.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 floatright">
                            <img class="center-block img-rounded img-responsive"
                                 src="{{asset("events/img/science explore 420_250.webp")}}" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="FutureCity">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <h2></h2>
                        <div class="col-md-6 panel">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion">Future City: Age ( 7 to 14 yrs). </a>
                                </h6>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Future city camp is a program designed for young kids interested in urban
                                        planning, architecture, engineering, robotics, coding and sustainability.
                                        The camp typically runs for several days. The camp aims to provide a fun and
                                        engaging learning experience for young kids, encouraging them to explore
                                        their interests and develop their skills in designing, building and coding.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 floatright">
                            <img class="center-block img-rounded img-responsive" loading="lazy"
                                 src="{{asset("events/img/future city .webp")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="FutureInventors">
        <div class="container">
            <div class="col-lg-12 col-md-12 ">
                <div class="col-md-12">
                    <div class="row">
                        <h2></h2>
                        <div class="col-md-6 panel">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion">Future Inventors: Age ( 5 to 9 yrs). </a>
                                </h6>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Future inventors camp is a program designed for little kids interested in
                                        science, technology, engineering, and innovation. The camp typically runs
                                        for several days. The camp aims to provide a fun encouraging them to explore
                                        their interests and develop their skills in creativity, innovation, and
                                        problem-solving.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 floatright">
                            <img class="center-block  img-rounded img-responsive"
                                 src="{{asset("events/img/future inventors 420_250.webp")}}" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="IOT">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <h2></h2>
                        <div class="col-md-6 panel">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion">IOT at Home (Young Hackers).( 6 to 13yrs) </a>
                                </h6>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>IOT (Internet of Things) at home camp is a program designed for young kids
                                        interested in the intersection of technology and home automation,
                                        encouraging them to explore their interests and develop their skills in
                                        creating smart home devices and systems.During the camp, participants. They
                                        may also have the opportunity to design and build their own smart devices,
                                        such as temperature and humidity sensors, smart lighting systems, or
                                        security systems, using popular platforms such as Arduino.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 floatright ">
                            <img class="center-block  img-rounded img-responsive" loading="lazy"
                                 src="{{asset("events/img/iot inventor camp.webp")}}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="GalaxyExplorers">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <h2></h2>
                        <div class="col-md-6 panel">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion">Galaxy Explorers Age ( 5 to 13yrs). </a>
                                </h6>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Galaxy Explorers Camp is designed to come blast off on an out-of-this-world
                                        adventure at our Summer Camp! Kids will learn about the wonders of
                                        technology and how it affects our world, as well as the basics of
                                        engineering and how structures are built. With a focus on all fields such
                                        as: Engineering, space, biology, and technology, will take you on a journey
                                        through the cosmos, exploring the wonders of the universe and the
                                        technologies that make space travel possible
                                        <span id="dots">.</span><span style="display: none;" id="more">.They will
                                                also delve into the
                                                mysteries of our own planet, learning about the delicate balance of
                                                ecosystems and the role we play in preserving them. They will get to
                                                participate in a range of environmental projects that aim to protect and
                                                conserve our planet's natural resources. With a mix of engaging and
                                                educational activities, this summer camp promises to be a fun-filled
                                                experience for kids who are curious about the world around them. So,
                                                let's
                                                make your kids pack their bags and prepare for an adventure that will
                                                take
                                                their beyond the limits of our world and into the endless possibilities
                                                of
                                                the universe
                                            </span>
                                    </p>
                                    <button class="btn" onclick="myFunction()" id="readBtn">Read more</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 floatright ">
                            <img class="center-block  img-rounded img-responsive"
                                 src="{{asset("events/img/galaxy explore 420_250.webp")}}" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="small-section bg-color1">
        <div class="container text-center text-light">
            <div class="col-md-6">
                <h4>Download Summer Camp </h4>
            </div>
            <div class="col-md-6">
                <a class="btn btn-color2" target="_blank"
                   href="https://drive.google.com/file/d/18Ar7Xx1M_P-E9GQ1YKC6HAUfMUYVRQFO/view?usp=sharing">Download</a>

            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-md-4">
                <h6>Science Street </h6>
                <p>Making science accessible and engaging for the next generation.
                </p>
            </div>
            <div class="col-md-4 res-margin">
                <ul class="list-unstyled footer-icons">
                    <li><i class="fa-brands fa-whatsapp "></i><a target="_blank"
                                                                 href="https://wa.me/message/L4JN2ZLJ5CIBG1">Chat on
                            WhatsApp</a></li>
                    <li><i class="fa fa-envelope"></i>Email: <a
                            href="mailto:contact@thesciencestreet.com">contact@thesciencestreet.com</a></li>
                    <li><i class="fa fa-map-marker"></i>Sharjah , United Arab Emirates</li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{asset("images/var.png")}}" alt="" class="res-margin center-block img-responsive">
                <!--Social icons -->
                <div class="social-media smaller">
                    <a href="https://www.tiktok.com/@annanscience" title="Tiktok Account"><i
                            class="fab fa-tiktok"></i></a>
                    <a href="https://www.facebook.com/annanscience" title="Facebook Account"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/science-street-llc/" title="Linkedin Account"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCX9HpIfGNU_NZFigRcOlPbA" title="Youtube Account"><i
                            class="fa fa-youtube"></i></a>
                    <a href="https://www.instagram.com/sciencestreetofficial/" title="Instagram Account"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="credits col-md-12 text-center">
                <hr/>
                ©2023 Science Street
                <div class="page-scroll hidden-sm hidden-xs">
                    <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("readBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.style.display = "none";
            moreText.style.display = "inline";
        }
    }
</script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"
        integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/prettyPhoto.min.js")}}"></script>
<script src="{{asset("js/skrollr.js")}}"></script>
<script src="{{asset("js/isotope.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"
        integrity="sha512-p7Ey2nBhKYEi9yh0iDs+GMA0ttebOqVl3OO2oWRzRxtDoN/RedyYcHFUJZhMVi8NKRdEA7n+9NTNQX/kFIZgNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/ffea153e43.js" crossorigin="anonymous"></script>
<script src="{{asset("layerslider/js/layerslider.kreaturamedia.jquery.js")}}" type="text/javascript"></script>
<script src="{{asset("js/main.js")}}"></script>

</body>

</html>
