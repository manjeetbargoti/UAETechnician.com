<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/frontend_css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/frontend_css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="{{ URL::asset('css/frontend_css/component-slidebars.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend_css/owl.carousel.min.css') }}" rel="stylesheet">

<title>UAE Technician</title>
  </head>
  <body>

@include('layouts.frontLayout.header_design')

@yield('content')

@include('layouts.frontLayout.footer_design')

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ URL::asset('js/frontend_js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend_js/custom.js') }}"></script>
    <script src="{{ URL::asset('js/frontend_js/slidebars.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend_js/component-slidebars.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/frontend_js/jquery.fadeImg.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/frontend_js/owl.carousel.min.js') }}"></script>

    <script>
    
    $('.loop').owlCarousel({
    center: true,
    items:3,
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        }
    }
   
});

$('.testimonials_carousel').owlCarousel({
    loop:true,
    margin:10,
    items:1
    
})
    </script>


</body>
</html>