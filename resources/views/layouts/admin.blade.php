
@extends('layouts.app')
@section('content')
@include('layouts.navigation')

<a href="#menu-toggle" class="btn btn-skin" id="menu-toggle">
    <i class="glyphicon glyphicon-align-justify"></i></a>

    <div id="wrapper">
        @include('adminBar')
        <div id="page-content-wrapper">
         <section id="about" class="inner-section color-dark bg-white">
            @yield('adminPage')
        </section>
        </div>
    </div>
    <script src=" {{ asset('js/jquery.js')}}"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

@endsection

