@extends("layouts.main")
@section("content")
    <div id="page-section">
        <section id="blog">
            <div class="container-fluid">
                <div class="jumbo-heading">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav nav-pills mobver">
                                <li class="dropdown">
                                    <a class="dropdown-toggle english" data-toggle="dropdown" href="#">Select Language <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route("competition.en")}}">English</a></li>
                                        <li><a href="{{route("competition")}}"> Arabic</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h1>Science Star</h1>
                        </div>
                        <div class="col-md-4">
                            <ul class="nav nav-pills mobver">
                                <li>
                                    <a href="https://forms.gle/76RZr58Ur6SJ7ztb9" target="_blank" id="send"
                                       class="btn english">Register
                                        Now</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="container">
                    <div id="blog-container" class="col-md-12">
                        <div class="blog-post post-main">
                            <img class="img-responsive center-block" loading="lazy" src="{{asset("images/scienceStar.webp")}}" alt="">
                            <div class="col-md-12 res-margin">
                                <div class="col-md-12">
                                    <!-- Tabs -->
                                    <h4 class="sub-header"></h4>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#A" data-toggle="tab">About</a></li>
                                        <li><a href="#B" data-toggle="tab">Terms and Conditions</a></li>
                                        <li><a href="#C" data-toggle="tab">Competition Guidelines</a></li>
                                    </ul>
                                    <div class="tabbable">
                                        <div class="tab-content">
                                            <div class="tab-pane active in fade" id="A">
                                                <ul class="custom no-margin">
                                                    <li>The Science star competition is a contest that features a group of science
                                                        communicators trying to communicate a scientific idea, the video should not
                                                        be less than 3 minutes and not more than five minutes
                                                        <br>
                                                        Contestants are evaluated on their clarity, delivery, and charisma. Ideas
                                                        can
                                                        be a simple clarification for an already existing scientific concept or a
                                                        description of original ongoing research ideas for students and researchers
                                                        working in various scientific fields.
                                                    </li>
                                                    <li>The competition starts with an evaluation of videos being uploaded by the
                                                        contestants. These videos will be evaluated according to a rubric measuring
                                                        content, research, vocabulary, presentation, voice expression, volume,
                                                        pacing
                                                        and
                                                        fluency, eye contact, and body language.
                                                        Judges are chosen according to their expertise in science communication, as
                                                        well
                                                        as participation in previous science communication competitions. Videos are
                                                        being watched triple times, and an average will be calculated.</li>
                                                    <li>
                                                        The semi-finalists will be notified after selecting them, and they will be
                                                        trained on the basis of science communication, effective delivery, ideas
                                                        formulation, and media production.
                                                    </li>
                                                    <li>The training product will be posted online, and the highest five voted
                                                        participants
                                                        will be selected to deliver their demo on a day full of surprises presented
                                                        by
                                                        Science Street and will be judged by a professional jury, giving on-stage
                                                        feedback.
                                                        The winner will be awarded 1000 USD cash and a medal of recognition.

                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /tab-pane -->
                                            <div class="tab-pane fade" id="B">
                                                <p>
                                                <ul class="custom no-margin">
                                                    <li>The contestants should be at least 18 years old by Mar 1, 2023.</li>
                                                    <li>The video Content should only be presented in Arabic.</li>
                                                    <li>The duration of the video should not be less than 3 minutes and not more
                                                        than five minutes.</li>
                                                    <li>The deadline for applying is Feb 25, 2023 (The form will be closed after
                                                        the
                                                        due date ).</li>
                                                    <li>The content should be exclusively for science content, i.e., physics,
                                                        chemistry, medical science, engineering, and technology).</li>
                                                    <li>The presented Ideas can be a clarification for an already existing
                                                        scientific concept or a description of original ongoing research ideas for
                                                        students and researchers working in various scientific fields.</li>
                                                    <li>Contestants can not use animated content, but they can rather use an
                                                        image or video breakers to illustrate a subject, with a proper reference
                                                        for the sources at the end of the video.</li>
                                                </ul>
                                                </p>
                                            </div>
                                            <!-- /tab-pane -->
                                            <div class="tab-pane fade" id="C">
                                                <ul class="custom no-margin">
                                                    <li>Contestants will choose a subject, simplify it, and then upload it to a
                                                        Youtube channel and then attach the link to the section requested in the
                                                        form. (The channel can be an already existing channel or a new one
                                                        exclusively made for the purpose of the competition)
                                                    </li>

                                                    <li>Contestants can follow the social media outlets of Science Street for the
                                                        announcement of the winners.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 margin1 ">
                                <div class="col-md-12">
                                    <h4 class="sidebar-header col-md-3">Judging Points</h4>
                                </div>
                                <div class="well col-md-4 margin1">
                                    <h5>Content</h5>
                                    <p>The talk includes accurate and in-depth information on all important
                                        subject matter and includes well developed details and examples. Overall subject
                                        knowledge is excellent.</p>
                                </div>
                                <div class="paper col-md-4">
                                    <h5>Research</h5>
                                    <p>There is evidence of throrough research, and all information is arragned
                                        and presented in the writer's own words.</p>
                                </div>
                                <div class="bubble col-md-4">
                                    <h5>Vocabulary</h5>
                                    <p>The contestant makes extensive use challenging domain vocabulary
                                        in an appropriate manner.</p>
                                </div>
                                <div class="paper col-md-4">
                                    <h5>Pacing and Fluency</h5>
                                    <p>The speaker always or almost always spoke at an appropriate
                                        pace. It was easy for the audience to understand.</p>
                                </div>
                                <div class="bubble col-md-4">
                                    <h5>Overall Presentation</h5>
                                    <p>This presentation exceeded expectations. The audience
                                        could easily understand the presentation.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 margin1 ">
                                <div class="col-md-12">
                                    <h4> Competition Timeline</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <table class="col-md-5 blockquote bg-color3">
                                            <tr>
                                                <td> Registration starts</td>
                                                <td> <i class="fa fa-calendar-days"></i> Feb 17, 2023</td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5 blockquote bg-color3">
                                            <tr>
                                                <td> Registration closes</td>
                                                <td> <i class="fa fa-calendar-days"></i> Feb 28, 2023</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class="col-md-5 blockquote bg-color1">
                                            <tr>
                                                <td>The first phase announcement </td>
                                                <td> <i class="fa fa-calendar-days"></i> Mar 5, 2023</td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5  blockquote bg-color1">
                                            <tr>
                                                <td>Voting for the Second phase </td>
                                                <td> <i class="fa fa-calendar-days"></i> Mar 6, 2023</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class="col-md-5  blockquote bg-color2">
                                            <tr>
                                                <td>The second phase announcement</td>
                                                <td> Stay Tuned</td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5 blockquote bg-color2">
                                            <tr>
                                                <td>Training of the finalists starts </td>
                                                <td> Stay Tuned</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class=" col-md-5  blockquote bg-color3">
                                            <tr>
                                                <td>Final round</td>
                                                <td> Stay Tuned</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center margin1">
                                <a href="https://forms.gle/76RZr58Ur6SJ7ztb9" target="_blank" id="send" class="btn">Register
                                    Now</a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
