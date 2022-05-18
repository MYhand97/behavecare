<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Pace Page</title>
    <link rel="shortcut icon" href="/storage/favicon_images/{{$site_settings->favicon_image}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">

      <!-- Header -->
      @include('back.header')

      <!-- Sidebar -->
      @include('back.main_sidebar')


      <!-- Content Wrapper -->
      <div class="content-wrapper">
        <!-- content -->
        @yield('content') 
      </div>

      <!-- footer -->
      @include('back.footer')

    </div>
    <!-- ./wrapper -->

    <script src="{{asset('js/app.js')}}"></script>
  </body>

