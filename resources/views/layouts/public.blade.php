<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

@include('includes.head')

<body>
<!------ Preloader Start ------>
<div id="preloader">
    <div id="status">
        <img src="{{ asset('images/logo.png') }}" alt="" height="500px" width="500px"/>
        <div class="loader">
            Loading...
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
    </div>
</div>
@include('includes.header')

@yield('content')

@include('includes.footer')
@include('includes.foot')
</body>

</html>