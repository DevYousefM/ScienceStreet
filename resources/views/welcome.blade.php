@extends("layouts.main")
@section("content")
    <div id="main" class="home">
        <div id="layerslider">
            <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
                <img src="{{asset("images/Slider/5.webp")}}" loading="lazy" class="ls-bg" alt="Slide background" />
                <div class="ls-l header-text"
                     data-ls="offsetxin:0;durationin:2000;delayin:200;easingin:easeInOutExpo;rotatexin:100;scalexin:0.8;scaleyin:0.8;transformoriginin:50% 50% -150;offsetxout:0;durationout:500;rotatexout:-20;scalexout:0.8;scaleyout:0.8;transformoriginout:50% 50% -150;">
                    <h1>Welcome to Science Street </h1>

                    <div class="page-scroll hidden-xs ">
                        <a class="btn contact" href="#contact">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
                <img src="{{asset("images/Slider/3.webp")}}" loading="lazy" class="ls-bg" alt="Slide background" />
            </div>
            <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
                <img src="{{asset("images/Slider/1.webp")}}" loading="lazy" class="ls-bg" alt="Slide background" />
            </div>
            <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
                <img src="{{asset("images/Slider/4.webp")}}" loading="lazy" class="ls-bg" alt="Slide background" />
            </div>
        </div>
        <section id="services" class="container">
            <div class="section-heading">
                <h2>Our Services</h2>
                <div class="hr">
                </div>
            </div>
            <div class="col-md-6">
                <iframe width="555" height="350" src="https://www.youtube.com/embed/T1toDqOkFNE?autoplay=1&mute=1"
                        class="img-curved center-block"
                        title="رسالة من spacetoon لشارع العلوم و شباب المستقبل @SpacetoonYouTube" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-12 col-md-6 res-margin">
                <p>Science Street is a company that offers a wide range of educational services aimed at promoting
                    science literacy and making science accessible to people of all ages. Their services include science
                    shows, hands-on learning experiences in STEM, robotics, and programming through camps and workshops,
                    awareness campaigns, fun lab events, a mobile science laboratory, STEM carnivals, science workshops,
                    exhibitions, competitions, and fairs. By incorporating robotics and coding into their events, Science
                    Street provides students with the opportunity to apply their knowledge and skills in a fun and
                    educational environment, and encourages the exploration and development of their scientific abilities.
                    Science Street is dedicated to promoting science education and literacy, and through their
                    comprehensive range of services, they aim to educate and inspire people about the wonders of science
                    and technology.
                </p>
            </div>
            <div id="services-slider" class="owl-carousel col-lg-12">
                <div class="serviceBox bg-color1">
                    <img src="{{asset("images/show.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Science Shows</h4>
                        <p class="description">
                            These are theatrical and entertaining presentations of scientific experiments and principles
                            aimed at making science more engaging and accessible to a wider audience. Science Street offers
                            you a wide range of different themed science shows delivered in different ways, Targeting
                            entertainment with basic educational concepts in different fields around us
                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color2">
                    <img src="{{asset("images/camp.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">STEM Camps</h4>
                        <p class="description">
                            Camps (Winter, Spring, and Summer): These are hands-on learning experiences for students in
                            STEM, robotics, and programming. They provide students with opportunities to apply their
                            knowledge and skills in a fun and educational environment.

                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color3">
                    <img src="{{asset("images/awareness.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Awareness Campaigns</h4>
                        <p class="description">
                            These events aim to raise
                            awareness about the importance of science and its impact
                            on our daily lives. Science Street uses these campaigns to
                            educate and inspire people about science and promote
                            scientific literacy.
                        </p>
                    </div>
                </div>

                <div class="serviceBox bg-color1">
                    <img src="{{asset("images/sciencebus.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <!-- service content -->
                    <div class="service-content text-light">
                        <h4 class="title">Science Bus</h4>
                        <p class="description">

                            This is a mobile science laboratory that
                            provides students with hands-on learning experiences and
                            promotes science education in underserved communities.

                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color2">
                    <img src="{{asset("images/13.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">STEM Carnivals</h4>
                        <p class="description">
                            These events bring together a variety of
                            STEM-related activities, games, and exhibits in a fun and
                            engaging atmosphere. They are designed to educate and
                            inspire people of all ages about the wonders of science and
                            technology.
                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color3">
                    <img src="{{asset("images/10.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">STEM Programs</h4>
                        <p>This programs are educational initiatives that focus on the study and application of the
                            scientific,
                            technological, engineering, and mathematical
                            disciplines. The goal of STEM programs is to provide students with the skills and knowledge they
                            need to
                            succeed in the modern world and to prepare them for careers in STEM fields through STEM Kits and
                            STEM Curriculums .

                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color1">
                    <img src="{{asset("images/schoolprograms.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">School Programs</h4>
                        <p class="description">
                            This programs are designed to engage students in hands-on learning experiences in the areas of
                            science, technology ,

                            engineering, and mathematics. Students have the opportunity to participate in projects and
                            experiments, work with

                            technology and software, and develop critical thinking and problem-solving skills.
                        </p>
                    </div>
                </div>

                <div class="serviceBox bg-color2">
                    <img src="{{asset("images/virtual.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Robotics and Virtual programs</h4>
                        <p class="description">
                            The programs can include virtual workshops, robotics kits, and competitions that are designed to
                            inspire and educate students about the latest advancements in these fields. These programs aim
                            to encourage students and contribute to the advancement of robotics and virtual technology.

                        </p>
                    </div>
                </div>
                <div class="serviceBox bg-color3">
                    <img src="{{asset("images/special.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Special and Themed programs</h4>
                        <p class="description">
                            These activities can be provided In any location by a range of experienced science and art
                            communicators and trainers. Helps the audience to interact, have fun and enhance their knowledge
                            with strong educational content
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="call-to-action1" class="container-fluid small-section" data-center="background-position: 50% 0px;"
                 data-top-bottom="background-position: 50% -20px;" data-bottom-top="background-position: 50% 20px;">
            <div class="text-center col-md-12">
                <div class="well col-lg-4 col-lg-offset-6">
                    <img src="{{asset("images/share3-3lom.png")}}" loading="lazy" class="" alt="">
                    <!-- Buttons -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">Contact us</a>
                        <a class="btn margin-btn" href="#about">About us</a>
                    </div>
                </div>
            </div>
        </section>
        <svg id="cloud2" class="hidden-xs hidden-sm" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
             height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path
                d="M-5 100 Q 0 20 5 100 Z M0 100 Q 5 0 10 100 M5 100 Q 10 30 15 100 M10 100 Q 15 10 20 100 M15 100 Q 20 30 25 100 M20 100 Q 25 -10 30 100 M25 100 Q 30 10 35 100 M30 100 Q 35 30 40 100 M35 100 Q 40 10 45 100 M40 100 Q 45 50 50 100 M45 100 Q 50 20 55 100 M50 100 Q 55 40 60 100 M55 100 Q 60 60 65 100 M60 100 Q 65 50 70 100 M65 100 Q 70 20 75 100 M70 100 Q 75 45 80 100 M75 100 Q 80 30 85 100 M80 100 Q 85 20 90 100 M85 100 Q 90 50 95 100 M90 100 Q 95 25 100 100 M95 100 Q 100 15 105 100 Z">
            </path>
        </svg>
        <section id="about" class="container-fluid">
            <div class="section-heading">
                <h2>About Us</h2>
                <div class="hr"></div>
            </div>
            <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatey( 40%);"
                 data-center-center="transform:translatey(-60%);">
                <img src="{{asset("images/2.png")}}" loading="lazy" alt="">
            </div>
            <div class="container">
                <div class="col-md-12 col-centered">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" role="tab"
                                                                      data-toggle="tab">About</a></li>
                            <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Mission </a></li>
                            <li role="presentation"><a href="#Section3" role="tab" data-toggle="tab"> Vision</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active in fade col-lg-12" id="Section1">
                                <div class="col-lg-7">
                                    <h3 class="text-center">About </h3>
                                    <p>Science Street is an Arab educational company that aims to make science learning more
                                        engaging and entertaining. The company offers a variety of services including
                                        scientific shows, curricula in partnership with the Ministry of Education, school
                                        technical support, and participation in science festivals. The company was founded in
                                        2017 and has since become one of the top 10 channels in the Middle East, with over 1
                                        billion views and 11 million followers. The founder, Abdullah Annan, and his team have
                                        conducted over 500 scientific experiments and aim to inspire the world by breaking
                                        officially registered world records with their large-scale experiments.
                                    </p>
                                </div>
                                <div class="col-lg-5">
                                    <img src="{{asset("images/annan.webp")}}" loading="lazy" alt=""
                                         class="img-curved  center-block img-responsive" />
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade col-lg-12" id="Section2">
                                <div class="col-lg-5 ">
                                    <img src="{{asset("images/mission.webp")}}" loading="lazy" alt=""
                                         class="img-curved center-block img-responsive" />
                                </div>
                                <div class="panel-group col-lg-7 " id="accordion">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title res-margin">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                                   href="#">Our Mission</a>
                                            </h6>
                                        </div>
                                        <div id="" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    Science Street's mission is to utilize social media channels and on-ground
                                                    events to create the most impactful learning experience for kids. They aim to
                                                    establish an Arab hub of science communicators who can apply their knowledge
                                                    and expertise to real-world situations, making science accessible and engaging
                                                    for the next generation.
                                                    Also include curricula in partnership with the Ministry of Education, school
                                                    technical support, and participation in science festivals. They also offer
                                                    summer camps in STEM ,robotics and programming, providing students with
                                                    hands-on learning experiences in these exciting fields</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade col-lg-12" id="Section3">
                                <div class="panel-group col-lg-7 " id="accordion2">
                                    <!-- Question 1 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                                   href="#">Vision</a>
                                            </h6>
                                        </div>
                                        <div id="" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Science Street's vision is to create a unique learning experience that
                                                    fosters a scientific mindset in younger generations.They aim to
                                                    provide education and engagement that will encourage the
                                                    development of a scientifically informed and curious community.
                                                </p>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="{{asset("images/vision.webp")}}" loading="lazy" alt=""
                                         class="img-curved center-block img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="container-fluid bg-color4">
            <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatey(20%);"
                 data-center-center="transform:translatey(-20%);">
                <img src="{{asset("images/5.png")}}" loading="lazy" alt="">
            </div>
            <div class="section-heading">
                <h2>Our Team</h2>
                <div class="hr"></div>
            </div>
            <div class="container">
                <div id="team-slider" class="owl-carousel">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/anan.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Abdullah Annan</h4>
                                <span class="post">Founder and CEO </span>
                            </div>
                        </div>
                        <p class="description">
                            Abdullah is a passionate engineer that made him CEO and founder of one of the biggest
                            educational digital and on ground services .
                            Abdullah started Science street 2017 , when is starts as simplifying complex concept through
                            experiments with easy clarification.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/marwa.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Marwa Ashraf</h4>
                                <span class="post">Managing Director</span>
                            </div>
                        </div>
                        <p class="description">
                            Marwa Ashraf is a passionate educator that have mastered science communicators and teaching in
                            formal education and informal education National and international standards , this passion led
                            to manage and lead the journey of science street .
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/nada.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Nada Ashraf</h4>
                                <span class="post">Account Manager</span>
                            </div>
                        </div>
                        <p class="description">
                            Experienced Account Manager, with a Bachelor of Science in Biology and Chemistry from Ain-Shams
                            University, and a background in science communication, STEAM education, pharmaceuticals, and
                            Dutch language instruction.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/essam.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Mohamed Essam</h4>
                                <span class="post"> Learning Experience Designer</span>
                            </div>
                        </div>
                        <p class="description">
                            Mohammad has a professional diploma in STEM education from the American.
                            He has worked
                            with various organizations, both local and international, and has five years of experience as a
                            science communication specialist at the American University in Cairo.

                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/Doaa.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Doaa El-sayed </h4>
                                <span class="post">Supervisor Content Creator </span>
                            </div>
                        </div>
                        <p class="description">
                            Science communication and STEAM education specialist with a passion for raising awareness of
                            STEM education. As a Techwomen Emerging Leader and a Production Content Supervisor at Science
                            Street, she has worked to develop a hands-on curriculum for children.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/salah.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Salah Eissa</h4>
                                <span class="post">Senior Business Developer</span>
                            </div>
                        </div>
                        <p class="description">
                            Salah is an experienced professional in business development, project management, and robotics
                            technology. He has a proven track record of successful projects, including being the project
                            manager and content director for high-impact initiatives.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/eman.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Eman Yehia</h4>
                                <span class="post">Social Media Production Specialist</span>
                            </div>
                        </div>
                        <p class="description">
                            Eman graduated from the International Academy for Engineering and Media Science and currently
                            works as a social media producer at Science Street Company. She also released her first novel at
                            the 2021 Cairo International Book Fair.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/dawood.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Abdelrahman Dawood</h4>
                                <span class="post">Logistics and Purchasing Specialist </span>
                            </div>
                        </div>
                        <p class="description">
                            Abdalrahman holds a Bachelor of Agricultural Sciences from the Faculty of Agriculture at
                            Al-Azhar University in Cairo.He works on the preparation of the experiments and the episodes.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/radwan.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Abdurrahman Radwan
                                </h4>
                                <span class="post">Logistics and Purchasing Specialist </span>
                            </div>
                        </div>
                        <p class="description">
                            Abdurrahman graduated with a major in biology from the American University in Cairo, where he
                            also minored in mass communication, and is currently serving as a teaching assistant there.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/hussien.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Hussein El Kazzaz</h4>
                                <span class="post">Fact-checking and production specialist</span>
                            </div>
                        </div>
                        <p class="description">
                            A physics and chemistry specialist with a degree from Ain Shams University He is passionate
                            about science communication and aims to raise public interest in STEM fields through engaging
                            content.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/ragab.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Mohamed Ragab</h4>
                                <span class="post">Videographer </span>
                            </div>
                        </div>
                        <p class="description">
                            Mohamed is a filmmaker and landscape photographer based in Egypt. He has collaborated with
                            numerous companies and local brands to create commercial work, documentary films, and music
                            videos.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/saif.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Saif Eldeen Ahmed</h4>
                                <span class="post">3D Generalist </span>
                            </div>
                        </div>
                        <p class="description">
                            Saif Eldeen Ahmed is a senior 3D generalist & compositor at Science Street, an indie game
                            developer and Junior VFX artist.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/adham.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Adham Yousri</h4>
                                <span class="post">Social media and video Editor</span>
                            </div>
                        </div>
                        <p class="description">
                            Adham is a multi-skilled filmmaker who has a talent for storytelling and a mastery of the
                            technical aspects of film production. He graduated from the Faculty of Arts' English department
                            and has been working in the film industry since 2016.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/amr.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Amr Attallah</h4>
                                <span class="post">DOP & Senior Editor</span>
                            </div>
                        </div>
                        <p class="description">
                            Amr Atallah has a Bachelor's degree in Electrical Engineering, but has a passion for media and
                            has over 9 years of experience in graphic design, shooting, and editing videos. He has
                            participated in organizing and photographing events in Egypt, Saudi Arabia, and the UAE.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/asmaa.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Asmaa Hassan </h4>
                                <span class="post">Content Junior</span>
                            </div>
                        </div>
                        <p class="description">
                            Content producer and science communicator with a bachelor of science in chemistry and physics.
                            She has developed STEAM education curriculum for kids, facilitated workshops and events,
                            designed contests , and participated as a science communicator in
                            international events in Saudi Arabia.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/Myar.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Mayar Mohamed</h4>
                                <span class="post">Content Junior</span>
                            </div>
                        </div>
                        <p class="description">Mayar graduated from the Faculty of Science and has experience in various
                            science-related
                            fields, including working as a scientific communication officer and teaching math and science.
                            She has given classes to simplify science and space science and has participated in multiple
                            science-related projects.   </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/reem.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Reem El-Kholy</h4>
                                <span class="post">Content Junior</span>
                            </div>
                        </div>
                        <p class="description">
                            Reem's dream is to inspire children with science and make it more accessible. She is a science
                            communicator and copywriter and has simplified biological curriculums for the Madrsetna
                            platform. She has participated in various international educational events.
                        </p>
                    </div>
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{asset("images/Team/naghm.webp")}}" loading="lazy" class="img-responsive img-circle" alt="">
                            <div class="team-info">
                                <h4>Nagham Mohey</h4>
                                <span class="post">Content Junior</span>
                            </div>
                        </div>
                        <p class="description">
                            A science communicator with a B.Sc. in molecular biotechnology and a diploma in therapeutic
                            nutrition. She specialises in making science fun for kids and is skilled in creating educational
                            content through shows, activities, and experiments. Nagham is committed to fostering a love of
                            science in the next generation.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="section-heading">
                <h2>Partners</h2>
                <div class="hr"></div>
            </div>
            <div class="container bg-pink">

                <div class="features col-lg-12 ">
                    <div id="featured-icons" class="partner owl-carousel  bg-white">
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/19.webp")}}" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/20.webp")}}" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/18.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/10.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/1.png")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/14.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/3.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/5.png")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/4.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/6.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/7.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/8.png")}}" loading="lazy" alt="">

                            </div>
                        </div>

                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/9.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/11.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/12.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/13.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/2.png")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/15.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/16.png")}}" loading="lazy" alt="">

                            </div>
                        </div>
                        <div class="media text-center">
                            <div class="media-body">
                                <img src="{{asset("images/partners/17.webp")}}" loading="lazy" alt="">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="achievements" class="container">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Our Achievements</h2>
                <div class="hr">
                </div>
            </div>
            <div id="achievement-slider" class="owl-carousel  col-lg-12">
                <div class="achBox bg-color1">
                    <img src="{{asset("images/Gallery/14.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Science shows and festivals</h4>
                        <p class="description">
                            Science Festivals is a public events that celebrates science and technology, and provides
                            opportunities
                            for people of all ages to engage with science in fun and interactive ways. Science festivals
                            often feature
                            hands-on exhibits, live demonstrations, and presentations by scientists, researchers, and
                            experts in
                            various fields
                        </p>
                    </div>
                </div>
                <div class="achBox bg-color3">
                    <img src="{{asset("images/jedda.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <!-- service content -->
                    <div class="service-content text-light">
                        <h4 class="title">Jeddah Science Festival</h4>
                        <p class="description">
                            Science Festivals is a public events that celebrates science and technology, and provides
                            opportunities
                            for people of all ages to engage with science in fun and interactive ways. Science festivals
                            often feature
                            hands-on exhibits, live demonstrations, and presentations by scientists, researchers, and
                            experts in
                            various fields.

                        </p>
                    </div>
                </div>
                <div class="achBox bg-color2">
                    <img src="{{asset("images/ach1.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 style="font-size: 20px;" class="title">Participation with the Ministry of Education in Egypt
                            for two years in
                        </h4>
                        <p class="description">
                            <ul class="custom no-margin  text-light stem">
                                <li>3 seasons of almokhtabar program , with 110 episodes </li>
                                <li> Two seasons of Tahdy almokhtabar program, with 100 episodes.</li>
                                <li>Participate in explaining the new developed curriculum with Discover.</li>
                                <li>Supervising the implementation and production of programming learning programs on Madrestna
                                    channel.
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="achBox bg-color1">
                    <img src="{{asset("images/RHC.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Riyadh Homecoming Festival</h4>
                        <p class="description">
                            One of the biggest festival in Saudi Arabia, Science Street participated on it and held in a
                            variety of activities in

                            all fields such as: Science, Space, Art and Music, also we held in a unique science show by
                            creating

                            opportunities for people to engage with science in a fun and accessible way.

                        </p>
                    </div>
                </div>
                <div class="achBox bg-color3">
                    <img src="{{asset("images/Gallery/19.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Riyadh Toy Festival (RTF)</h4>
                        <p class="description">
                            In this Festival Science Street participated with a variety of zones themed with barbie
                            character such
                            as: Barbie astronaut, Barbie as a doctor and Barbie artist. and also with a very branded show “
                            Barbie
                            Science show “.

                        </p>
                    </div>
                </div>
                <div class="achBox bg-color2">
                    <img src="{{asset("images/ethraa.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <!-- service content -->
                    <div class="service-content text-light">
                        <h4 style="font-size: 20px;" class="title">Major scientific workshop in partnership with the King
                            Abdulaziz Center for World
                            Culture (Ithra) </h4>
                        <p>A Special event with Ithra, participating on this event by creating a new science show

                            with kids and make them mimic the show on a tables as a work-shops with their communicators to
                            facilitate the

                            process of experiments and engage them with science in a accessible way
                        </p>
                    </div>
                </div>
                <div class="achBox bg-color1">
                    <img src="{{asset("images/national.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <!-- service content -->
                    <div class="service-content text-light">
                        <h4 class="title">National Science Week </h4>
                        <p class="description">
                            TThe purpose of this Week is to engage the public in scientific activities and discussions,
                            promote scientific literacy, and encourage people to pursue careers in science, technology,
                            engineering, and mathematics (STEM) fields. And designed to be accessible and fun for
                            people of all age.

                        </p>
                    </div>
                </div>
                <div class="achBox bg-color3">
                    <img src="{{asset("images/Gallery/17.webp")}}" loading="lazy" class="img-responsive img-circle" alt="" />
                    <div class="service-content text-light">
                        <h4 class="title">Abu Dhabi Science Festival</h4>
                        <p class="description">
                            (Abu Dhabi Science Festival is the largest event of its kind in the region, which is held yearly
                            in the Emirate of Abu Dhabi. The 10-day event attracts more than 100,000 visitors and is open
                            for all ages. It provides fun-filled activities for all family members through workshops,
                            exhibits and shows.)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery" class="container-fluid bg-color1">
            <div class="section-heading">
                <h2 class="text-light">Gallery</h2>
                <div class="hr light"></div>
            </div>
            <div class="polaroids">
                <div id="lightbox">
                    <div class="facilities col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/14.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/14.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Science Show</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/2.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/2.webp")}}" loading="lazy" class="img-responsive" />
                                <p>&nbsp;</p>
                            </a>
                        </div>
                    </div>
                    <div class="facilities col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/22.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/22.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Biology</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff  col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/24.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/24.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Green Earth</p>
                            </a>
                        </div>
                    </div>
                    <div class="facilities col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/23.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/23.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Kids on the Moon</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/25.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/25.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Sustainable energy</p>
                            </a>
                        </div>
                    </div>
                    <div class="facilities col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/28.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/28.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Robotics </p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/22-2.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/22-2.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Biology</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/29.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/29.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Math & Physics </p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/3.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/3.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Science Zone</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/5.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/5.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Art Zone</p>
                            </a>
                        </div>
                    </div>
                    <div class="staff col-lg-3 col-md-6 col-sm-6">
                        <div class="polaroid-item">
                            <a href="{{asset("images/Gallery/4.webp")}}" data-gal="prettyPhoto[gallery]">
                                <img alt="" src="{{asset("images/Gallery/4.webp")}}" loading="lazy" class="img-responsive" />
                                <p>Space Zone</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <svg id="curveDownColor1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
             height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 C 50 100 80 100 100 0 Z" />
        </svg>
        <section id="contact" class="bg-lightcolor1 container-fluid nobg-small">
            <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
                 data-100="transform:translatex(-310%);" data-center-center="transform:translatex(30%);">
                <img src="{{asset("images/1.png")}}" loading="lazy" alt="">
            </div>
            <div class="section-heading">
                <h2>Contact Us</h2>
                <div class="hr"></div>
            </div>
            <div class="container">
                <div class="col-md-5">
                    <div id="contact_form">
                        <h4>Send Us a Message</h4>
                        <div class="form-group">
                            <label>Name:</label><input type="text" name="name" class="form-control input-field" required="">
                            <label>Email:</label><input type="email" name="email" class="form-control input-field"
                                                        required="">
                            <label>Subject:</label><input type="text" name="subject" class="form-control input-field"
                                                          required="">
                        </div>
                        <label>Message:</label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="4"
                                  required=""></textarea>
                        <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
                    </div>
                    <div id="contact_results"></div>
                </div>
                <div class="res-margin">
                    <div class="col-md-6 col-md-offset-1 well text-center bg-white">
                        <h4>Information</h4>
                        <div class="contact-info ">
                            <p><i class="fa fa-envelope margin-icon"></i><a
                                    href="mailto:contact@thesciencestreet.com">contact@thesciencestreet.com</a></p>
                            <p><i class="fa-brands fa-square-whatsapp margin-icon"></i><a
                                    href="https://wa.me/message/L4JN2ZLJ5CIBG1">Chat on
                                    WhatsApp</a> </p>
                            <p><i class="fa fa-map-marker margin-icon"></i>Sharjah , United Arab Emirates</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="newsletter" class="small-section bg-color1">
        <div class="container text-center text-light">
            <div class="col-md-6">
                <h4>Download the Portfolio</h4>
            </div>
            <div class="col-md-6">
                <a class="btn btn-color2" target="_blank"
                   href="https://drive.google.com/file/d/1uRhEC7oPqVUkrTCniPPAf06nL7fmH2-u/view?usp=sharing">Download</a>

            </div>
        </div>
    </section>
@endsection
