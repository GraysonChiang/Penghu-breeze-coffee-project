<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shooting the Breeze</title>
    
    <!-- css -->
    <link href="{{asset('css/bootstrap.min.css' )}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-awesome/css/font-awesome.min.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/nivo-lightbox.css' )}}" rel="stylesheet" />
    <link href="{{asset('css/nivo-lightbox-theme/default/default.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/owl.carousel.css' )}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/owl.theme.css' )}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/flexslider.css' )}}" rel="stylesheet" />
    <link href="{{asset('css/animate.css' )}}" rel="stylesheet" />
    <link href="{{asset('css/style.css' )}}" rel="stylesheet">
    <link href="{{asset('color/default.css' )}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


@yield('content')



@include('layouts.footer')
    <!-- Core JavaScript Files -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src=" {{ asset('js/jquery.min.js')}} "></script>     
    <script src=" {{ asset('js/bootstrap.min.js')}} "></script>
    <script src=" {{ asset('js/jquery.sticky.js')}} "></script>
    <script src=" {{ asset('js/slippry.min.js')}} "></script> 
    <script src=" {{ asset('js/jquery.flexslider-min.js')}} "></script>
    <script src=" {{ asset('js/morphext.min.js')}} "></script>
    <script src=" {{ asset('js/gmap.js')}} "></script>
    <script src=" {{ asset('js/jquery.mb.YTPlayer.js')}} "></script>
    <script src=" {{ asset('js/jquery.easing.min.js')}} "></script> 
    <script src=" {{ asset('js/jquery.scrollTo.js')}} "></script>
    <script src=" {{ asset('js/jquery.appear.js')}} "></script>
    <script src=" {{ asset('js/stellar.js')}} "></script>
    <script src=" {{ asset('js/wow.min.js')}} "></script>
    <script src=" {{ asset('js/owl.carousel.min.js')}} "></script>
    <script src=" {{ asset('js/nivo-lightbox.min.js')}} "></script>
    <script src=" {{ asset('js/jquery.nicescroll.min.js')}} "></script>
    <script src=" {{ asset('js/custom.js')}} "></script>
</body>

</html>