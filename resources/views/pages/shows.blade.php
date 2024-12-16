@extends("layouts.main")
@section("content")
    <div id="layerslider">
        <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
            <img src="{{asset("events/img/campSlider1.webp")}}" loading="lazy" class="ls-bg" alt="Slide background"/>
        </div>
        <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
            <img src="{{asset("events/img/campSlider3.webp")}}" loading="lazy" class="ls-bg" alt="Slide background"/>
        </div>
        <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
            <img src="{{asset("events/img/campSlider4.webp")}}" class="ls-bg" alt="Slide background"/>
        </div>
    </div>
    <section class="container-fluid">
        <div class="section-heading">
            <h2>Science Street Shows</h2>
            <div class="hr"></div>
        </div>
        <div class="container">
            <div class="col-md-12 col-centered">
                <div class="tab" role="tabpanel">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active in fade col-lg-12" id="Section1">
                            <div class="col-lg-5">
                                <p>Science Street offers many scientific shows, where a theatrical and entertaining
                                    nature meets many
                                    scientific experiments that are presented in different fields to make science
                                    more fun for the
                                    public and encourage the Arab and global community on the importance of science.
                                    Science Street
                                    shows are distinguished by being specially tailored and customized based on the
                                    needs of our
                                    customers in the Arab world. It includes different themes such as: Fire and Ice
                                    Shows
                                </p>
                            </div>
                            <div class="col-lg-6 res-margin floatright">
                                <img src="{{asset("events/img/aboutShows.webp")}}" loading="lazy"
                                     class="img-rounded  center-block img-responsive"/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="section-heading">
            <h2>ICE SHOW </h2>
            <div class="hr"></div>
        </div>
        <div class="container">
            <div class="col-md-12 col-centered">
                <div class="col-md-6">
                    <p>Ice Show includes a lot of scientific experiments that contain all the chemicals that are
                        characterized by low temperature such as liquid nitrogen and dry ice, Where scientific shows
                        are presented with storyline of suspense:
                    </p>
                    <p>A chemist is doing his daily work in the laboratory, and he is surprised by the gradual rise
                        in the temperature due to the news that warned from weather conditions due to the beginning
                        of the global warming in the world. The chemist start to do his best with his knowledge in
                        chemistry to choose the best chemicals and materials to use it in this problem and try to
                        decrease the temperature. That is when his friend wondered about using sort of liquids that
                        have 196 °C below zero and joined with him to do his different experiments with this amazing
                        liquid in different ways.
                    </p>
                </div>
                <div class="col-md-12 col-md-6 res-margin">
                    <img src="{{asset("events/img/ice.webp")}}" loading="lazy"
                         class="img-rounded  center-block img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid margin1">
        <div class="section-heading">
            <h2>FIRE SHOW </h2>
            <div class="hr"></div>
        </div>
        <div class="container">
            <div class="col-md-12 col-centered">
                <div class="col-md-6">
                    <p>In this science show we are going to talk about two scientists’ plane got crashed and they
                        will be on abandoned island and try their best to escape and make a huge explosion to
                        attract passing plane on the abandoned island, so they are trying to find all the tools that
                        can help them, They found an abandoned laboratory that contains old equipment that will help
                        them set fires and conduct all major fire experiments on this island to make a huge
                        explosion that can help them.
                        This show is the start of a competition (big bang fire), through which the two scientists
                        perform all the experiments they conducted on the island, but the winner of them is the one
                        who added to his experiment, which makes the explosion scale higher than the other, to reach
                        the higher bar of the explosion.
                    </p>
                </div>
                <div class="col-md-12 col-md-6 res-margin">
                    <img src="{{asset("events/img/fire.webp")}}" loading="lazy"
                         class="img-rounded  center-block img-responsive" alt="">
                </div>
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
