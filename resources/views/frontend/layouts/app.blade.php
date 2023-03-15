<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title')</title>
    <meta description="@yield('meta_description')">
    
    <link rel="icon" type="image/svg" href="{{ asset('frontend') }}/images/favicon.png" />
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <x-frontend.header />
    <!-- Header End-->

    @yield('content')

<!--google-review end-->
<!-- footer-start-->
<x-frontend.footer/>  
 <!-- jQuery library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- Slider Slider -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
 <!--- Custom js ---->

 <script src="{{ asset('frontend') }}/assets/js/ScrollMagic.min.js"></script>
 <script src="{{ asset('frontend') }}/assets/js/TweenMax.min.js"></script>
 <script src="{{ asset('frontend') }}/assets/js/debug.addIndicators.min.js"></script>
 <script src="{{ asset('frontend') }}/assets/js/animation.gsap.min.js"></script>
 <script src="{{ asset('frontend') }}/assets/js/main.js"></script>


</body>

</html>
 