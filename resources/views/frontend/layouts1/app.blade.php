<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>oauth</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
 
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <!-- font-awesome icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    
    @yield('style')
    
  </head>

  <body>

    @include('frontend.layouts1.header')

    @yield('content')

    @include('frontend.layouts1.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>

    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('frontend/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('frontend/js/inewsticker.js')}}"></script>
    <script src="{{asset('frontend/js/bootsnav.js.')}}"></script>
    <script src="{{asset('frontend/js/images-loded.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    @yield('script')

  </body>
</html>
