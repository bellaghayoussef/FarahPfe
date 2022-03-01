@extends('adminlte::page')







@section('css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <style type="text/css">
        .main-sidebar {
            background-image: url('{{ asset('images/logo2.jpg') }}');
            background-repeat: no-repeat !important;

        }

        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #e5ce00 !important;
        }

        .bg-primary {
            background-color: #E9E9E9 !important;
            color: black !important;
        }

    </style>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
      rel="stylesheet"
      type="text/css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/components.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/quickadmin-layout.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css"/>
<link rel="stylesheet"
      href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

@endsection

@section('js')

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>




@stop
