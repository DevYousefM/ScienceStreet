<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="Science Street is an Arab educational company that aims to make science learning more engaging and entertaining.">
    <title>Science Street</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/site.webmanifest")}}">
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon">

    <link href="{{asset("css/bootstrap.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("fonts/flaticons/flaticon.css")}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Cairo:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("layerslider/css/layerslider.css")}}">
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    <link href="{{asset("styles/maincolors.css")}}" rel="stylesheet">
    @yield("css")
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

    @include("components.nav")
    @yield("content")
    @include("components.footer")

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"
        integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"
        integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jQuery-easing.js")}}"></script>
<script src="{{asset("js/prettyPhoto.min.js")}}"></script>
<script src="{{asset("js/skrollr.js")}}"></script>
<script src="{{asset("js/isotope.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"
        integrity="sha512-p7Ey2nBhKYEi9yh0iDs+GMA0ttebOqVl3OO2oWRzRxtDoN/RedyYcHFUJZhMVi8NKRdEA7n+9NTNQX/kFIZgNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/ffea153e43.js" crossorigin="anonymous"></script>
<script src="{{asset("layerslider/js/layerslider.kreaturamedia.jquery.js")}}" type="text/javascript"></script>
<script src="{{asset("js/contact.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
@yield("script")
</body>

</html>
