@extends("layouts.main")
@section("css")
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}" />
@endsection
@section("content")
    <div class="teacher-training"></div>
    <section class="container-fluid margin1">
        <div class="section-heading wow  animated fadeInUp " data-wow-delay="0.1s">
            <h2 style="font-size: 40px;">Science Street Professional training for teachers</h2>
            <div class="hr"></div>
        </div>
        <div class="container">
            <div class="col-md-6 wow animated slideInLeft" data-wow-delay="0.3s">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse1">Training Overview</a>
                            </h6>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>This training program is designed to equip teachers with the knowledge and skills
                                    necessary to effectively teach STEAM (Science, Technology, Engineering, Arts,
                                    and Mathematics) concepts to their students using experimental methods. The
                                    program will also cover science communication best practices, enabling teachers
                                    to effectively communicate scientific concepts to their students and the broader
                                    community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse2"> Training Objectives</a>
                            </h6>
                        </div>
                        <!-- /panel-heading -->
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="custom no-margin stem">
                                    <li>Understand the principles and importance of STEAM education and its role in
                                        preparing students for the future.</li>
                                    <li>Explore various experimental methods for teaching STEAM concepts, including
                                        hands-on activities, project-based learning, and inquiry-based learning.
                                    </li>
                                    <li>Learn how to design and implement effective STEAM lessons and activities
                                        that align with curriculum standards and engage students.
                                    </li>
                                    <li>Develop skills in science communication, including how to communicate
                                        scientific concepts in an engaging and accessible way, how to use visual
                                        aids and storytelling techniques, and how to tailor communication to
                                        different audiences.</li>
                                    <li>Understand the importance of diversity, equity, and inclusion in STEAM
                                        education and science communication, and how to create inclusive learning
                                        environments.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse3">Target Audience </a>
                            </h6>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="custom no-margin stem">
                                    <li>Science Teachers</li>
                                    <li>Science Communicators</li>
                                    <li>Interested in homeschooling</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 res-margin floatright wow animated slideInRight" data-wow-delay="0.3s">
                <img src="{{asset("images/training-overview.webp")}}" loading="lazy"
                     class="img-rounded center-block img-responsive" />
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="section-heading wow  animated fadeInUp " data-wow-delay="0.1s">
            <h2>Workshops Schedule </h2>
            <div class="hr"></div>
        </div>
        <div class="container margin1">
            <div class="col-md-12 col-centered">
                <div class="col-md-6 wow animated slideInLeft" data-wow-delay="0.3s">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse">One day Workshop (3hrs)</a>
                        </h6>
                    </div>
                    <div class="panel-body">
                        <p>The one-day workshop aims to inspire and empower school teachers to effectively
                            communicate
                            and teach their curriculum using STEM principles and experimental play. By equipping
                            teachers with practical strategies, resources, and collaborative opportunities, the
                            workshop
                            encourages them to create engaging learning environments that foster curiosity, critical
                            thinking, and problem-solving skills in their students.
                        </p>
                        <h6 class="text-secondary">Main topics</h6>
                        <ul class="custom no-margin stem">
                            <li>Teaching Sciences using Experimental Play Method. (1hr)</li>
                            <li>Integrating STEM into the Curriculum. (2hrs)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 floatright wow animated slideInRight" data-wow-delay="0.3s">
                    <img src="{{asset("images/one-day.webp")}}" loading="lazy" class="img-rounded  center-block img-responsive"
                         alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="container margin1">
            <div class="col-md-12 col-centered">
                <div class="col-md-6 wow animated slideInLeft" data-wow-delay="0.3s">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse">Two days Workshop
                                (6hrs)</a>
                        </h6>
                    </div>
                    <div class="panel-body">
                        <p>The two-day workshop aims to equip school teachers with the knowledge and skills to
                            effectively communicate and teach their curriculum using technology tools, STEM
                            principles and experimental play. Through hands-on training, collaborative activities,
                            and discussions, teachers will explore a range of technology tools, develop strategies
                            for integration, and reflect on their implementation in the classroom.
                        </p>
                        <h6 class="text-secondary">Main topics</h6>
                        <ul class="custom no-margin stem">
                            <li>Effective Science communication</li>
                            <li>Teaching Sciences using Experimental Play Method</li>
                            <li>Introduction to Computational Thinking approach</li>
                            <li>The AI Classroom</li>
                            <li>Multimedia in Teaching</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 floatright margin1  wow animated slideInRight" data-wow-delay="0.3s">
                    <img src="{{asset("images/twodaysTraining.webp")}}" loading="lazy"
                         class="img-rounded  center-block img-responsive" alt="">
                </div>
            </div>
        </div>
        <div class="container text-center mb-5">
            <div class="row wow fadeInUp" data-wow-delay="0.9s">
                <a class="btn btn-color2">
                    Cooming Soon</a>
            </div>
        </div>
    </section>


@endsection

@section("script")
    <script src="{{asset("js/wow.min.js")}}"></script>
    <script>
        $(document).ready(function () {


            new WOW().init();
        });
    </script>

@endsection
