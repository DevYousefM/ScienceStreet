<nav class="navbar navbar-custom navbar-fixed-top" id="navbar-custom">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-toggle icons-toggle ">
                <ul class="nav socialbar-nav">
                    <li><a href="https://www.facebook.com/annanscience" target="_blank" title="Facebook Account"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/science-street-llc/" target="_blank"
                           title="Linkedin Account"><i class="fab fa-linkedin "></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCX9HpIfGNU_NZFigRcOlPbA" target="_blank"
                           title="Youtube Account"><i class="fa fa-youtube "></i></a></li>
                    <li><a href="https://www.instagram.com/sciencestreetofficial/" target="_blank"
                           title="Instagram Account"><i class="fab fa-instagram "></i></a></li>
                    <li><a href="https://wa.me/message/L4JN2ZLJ5CIBG1" target="_blank" title="Instagram Account"><i
                                class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="navbar-brand page-scroll">
                <a href="{{Route::currentRouteName() !== "home" ? "/" : "#page-top"}}"><img
                        src="{{asset("images/logo.png")}}" class="img-responsive" alt=""></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-brand">
            <ul class="nav navbar-nav page-scroll navbar-right">
                <li class="{{Route::currentRouteName() === "home" ? "active" : ""}}"><a
                        href="{{Route::currentRouteName() !== "home" ? "/" : "#page-top"}}">Home</a></li>
                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#services"}}">Services</a></li>
                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#about"}}">About Us</a></li>
                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#team"}}">Team</a></li>
                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#achievements"}}">Achievements</a></li>
                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#gallery"}}">Gallery</a></li>

                <li><a href="{{Route::currentRouteName() !== "home" ? "/" : "#contact"}}">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route("competition")}}">Competition</a></li>
                        <li><a href="{{route("science.day")}}">Science Street Day</a></li>
                        <li><a href="{{route("summer.camps")}}">Summer Camps</a></li>
                        <li><a href="{{route("shows")}}">Shows </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">School<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route("teachers.training")}}">Teachers Training </a></li>
                        <li><a href="{{route("online.courses")}}">Online Courses </a></li>
                    </ul>
                </li>
                <ul class="nav socialbar-nav  navbar-right hidden-xs hidden-sm">
                    <li><a href="https://www.facebook.com/annanscience" target="_blank" title="Facebook Account"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/science-street-llc/" target="_blank"
                           title="Linkedin Account"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCX9HpIfGNU_NZFigRcOlPbA" target="_blank"
                           title="Youtube Account"><i class="fa fa-youtube "></i></a></li>
                    <li><a href="https://www.instagram.com/sciencestreetofficial/" target="_blank"
                           title="Instagram Account"><i class="fab fa-instagram "></i></a></li>
                    <li><a href="https://wa.me/message/L4JN2ZLJ5CIBG1" target="_blank" title="Whatsapp Account"><i
                                class="fa-brands fa-whatsapp "></i></a></li>
                </ul>
            </ul>
        </div>
    </div>
</nav>
