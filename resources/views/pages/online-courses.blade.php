@extends("layouts.main")
@section("content")
    <div class="online-courses"></div>
    <section class="container-fluid">
        <div class="section-heading wow  animated fadeInUp " data-wow-delay="0.1s">
            <h2 style="font-size: 30px;">Science Street Online courses 2023</h2>
            <h2 class="text-secondary" style="font-size: 24px;">From Lab to the home</h2>
            <div class="hr"></div>
        </div>
        <div class="container ">
            <div class="flex page-scroll">
                <div class="col-md-4 col-sm-12 text-center wow animated slideInLeft mb-5" data-wow-delay="0.3s">
                    <h4 class="sub-header mb-5">Engineering Course</h4>
                    <div class="img-effect">
                        <a href="#engineeringCourse">
                            <img src="images/engineering-course.webp" class="img-rounded img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center wow animated slideInRight" data-wow-delay="0.3s">
                    <h4 class="sub-header mb-5">Science Course </h4>
                    <div class="img-effect">
                        <a href="#scienceCourse">
                            <img src="images/science-course.webp" class="img-rounded img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="container-fluid" id="engineeringCourse">
        <div class="section-heading wow  animated fadeInUp " data-wow-delay="0.1s">
            <h2 style="font-size: 35px;">Engineering Course</h2>
            <h2 class="text-secondary" style="font-size: 24px;">(Age 7-12 years)</h2>
            <div class="hr camp"></div>
        </div>
        <div class="container">
            <div class="col-md-6 col-sm-12 wow animated slideInLeft" data-wow-delay="0.3s">
                <h4 class="sub-header mb-5">Building a passion for engineering</h4>
                <p><b class="text-secondary">Why joining Engineering Course?</b>
                <ul class="custom no-margin stem">
                    <li> To actively engage students: Through design-based projects while deepening their
                        understanding of fundamental concepts.
                    </li>
                    <li>To raise the level of technological literacy: Through practical skills and a deeper
                        comprehension of our dynamic modern world.
                    </li>
                    <li>To broaden participation in STEM fields: Through emphasizing that diverse teams result in
                        the most innovative designs to improve our world.
                    </li>
                </ul>
                </p>
                <h5 class="text-secondary">Engineering Course Learning objectives</h5>
                <p>By the end of this course, students will have a deep understanding of the Engineering Design
                    Process. They will be challenged to think critically to solve these problems, communicate
                    and
                    brainstorm with classmates, and understand that failure is an important part of the design
                    process.</p>
            </div>
            <div class="col-md-5 col-sm-12  wow animated slideInRight" data-wow-delay="0.3s">
                <div class="img-effect ">
                    <img src="images/robotics.webp" class="center-block img-rounded img-responsive" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="small-section bg-color1">
        <div class="container text-center text-light">
            <div class="col-md-4">
                <h4>About Engineering Course</h4>
            </div>
            <div class="col-md-8 text-center">
                <ul class="nav nav-pills page-scroll text-center">
                    <li><a>Inventions</a></li>
                    <li><a>Mechanics </a></li>
                    <li><a>Hydraulics</a></li>
                    <li><a>Robotics</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid ">
        <div class="container flex">
            <div class="col-md-3 col-sm-6 col-xs-12 course-details text-center wow zoomIn" data-wow-delay="0.1s">
                <h5>Inventions</h5>
                <p>DIY Invention Challenge: Divide the students into teams and challenge them to come up with
                    their
                    own inventions to solve a specific problem.

                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 course-details text-center wow zoomIn" data-wow-delay="0.3s">
                <h5>Mechanics </h5>
                <p>Bridge Building Competition: Divide students into groups and challenge them to build bridges
                    using materials like popsicle sticks, paper, or straws. Test the strength of the bridges by
                    adding weight until they collapse, and see which team's bridge holds the most weight.
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 course-details text-center wow zoomIn" data-wow-delay="0.5s">
                <h5>Hydraulics</h5>
                <p>Hydraulic Claw Challenge: Have students design and build a hydraulic-powered claw or gripper
                    capable of picking up objects. Provide them with basic materials like syringes, cardboard,
                    and
                    tubing to create their devices.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 course-details text-center wow zoomIn" data-wow-delay="0.7s">
                <h5>Robotics</h5>
                <p>Build a Mini Robot: Provide robotics kits or individual components (e.g., motors, sensors,
                    wheels) and guide students in assembling their mini-robots. They can then program these
                    robots
                    to perform simple tasks or navigate through a maze.
                </p>
            </div>
        </div>

    </section>
    <section class="container-fluid">
        <div class="container text-center">
            <div class=" wow fadeInUp" data-wow-delay="0.9s">
                <a class="btn btn-color2" href="{{route("register.form","Engineering")}}">Register Now (800 EGP)</a>
            </div>
        </div>
    </section>
    <section class="container-fluid margin1" id="scienceCourse">
        <div class="section-heading wow  animated fadeInUp " data-wow-delay="0.1s">
            <h2 style="font-size: 35px;">Science Course</h2>
            <h2 class="text-secondary" style="font-size: 24px;">(Age 7-12 years)</h2>
            <div class="hr"></div>
        </div>
        <div class="container flex mb-5">
            <div class="col-md-6 col-sm-12 wow animated slideInLeft" data-wow-delay="0.3s">
                <h4 class="sub-header mb-5">Unlock the wonders of science</h4>
                <p><b class="text-secondary">Why joining Science Course?</b> <br>
                    The Science course will introduce students to the world of science through STEM strategies,
                    which will help them to develop critical thinking, problem-solving, and analytical skills and
                    will provide them with solid and important information about basic concepts in Science. The
                    course will be delivered through a combination of interactive online sessions and hands-on
                    experiments and demos that students can do at home.
                </p>
                <h5 class="text-secondary">Science Course Learning objectives</h5>
                <ul class="custom no-margin stem">
                    <li>Introduce students to the basics of science, including the scientific method, key scientific
                        concepts, and terminology
                    </li>
                    <li>Promote an interest in science and encourage students to pursue further studies in STEM
                        subjects.
                    </li>
                    <li>Provide a fun and interactive summer learning experience that will keep students engaged and
                        motivated throughout the course.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12  wow animated slideInRight" data-wow-delay="0.3s">
                <div class="img-effect text-center">
                    <img src="images/science.webp" class="img-rounded img-responsive" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="small-section bg-color1">
        <div class="container text-center text-light">
            <div class="col-md-5">
                <h4>About Science Course</h4>
            </div>
            <div class="col-md-7 text-center">
                <ul class="nav nav-pills page-scroll text-center">
                    <li><a>Chemistry theme</a></li>
                    <li><a>Physics theme </a></li>

                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid margin1">
        <div class="container flex mb-5">
            <div class="col-md-6 col-sm-12 course-details text-center wow zoomIn" data-wow-delay="0.1s">
                <h5>Chemistry Theme </h5>
                <p>Chemistry workshops to explore the foundations of chemistry through engaging experiments and
                    hands-on activities. Participants will gain a deep understanding of key concepts such as
                    chemical reactions, and the properties of matter, fostering critical thinking skills and a
                    passion for scientific inquiry.
                </p>
            </div>

            <div class="col-md-6 col-sm-12 course-details text-center wow zoomIn" data-wow-delay="0.3s">
                <h5>Physics Theme</h5>
                <p>Physics workshops provide an immersive experience that unlocks the wonders of the physical world.
                    Through interactive experiments and demonstrations, participants will grasp fundamental concepts
                    such as motion, energy, and forces, cultivating analytical thinking skills and fostering a
                    deeper appreciation for the laws that govern our universe.
                </p>
            </div>
        </div>
        <div class="container text-center mb-5">
            <div class="row wow fadeInUp" data-wow-delay="0.9s">
                <a class="btn btn-color2" href="{{route("register.form","Science")}}">Register Now (800 EGP)</a>
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
