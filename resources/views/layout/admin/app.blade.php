<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="{{URL::asset('admin_assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{URL::asset('admin_assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::asset('admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{URL::asset('admin_assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body>
  @include('layout.admin.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layout.admin.navbar')
    <!-- Header -->
    
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('content')
      
      {{-- @include('layout.admin.footer') --}}
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{URL::asset('admin_assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{URL::asset('admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('admin_assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{URL::asset('admin_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{URL::asset('admin_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{URL::asset('admin_assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{URL::asset('admin_assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{URL::asset('admin_assets/js/argon.js?v=1.2.0')}}"></script>
  <script src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script> 
  <script> CKEDITOR.replace('article-ckeditor'); </script> 
</body>

</html>
