<!DOCTYPE html>
<html lang="en">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<title>Farah Pfe</title>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    html * {
        -webkit-font-smoothing: antialiased;
    }

    .h6,
    h6 {
        font-size: .75rem !important;
        font-weight: 500;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        line-height: 1.5em;
        text-transform: uppercase;
    }
    

    .name h6 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .navbar {
        border: 0;
        border-radius: 3px;
        padding: .625rem 0;
        margin-bottom: 20px;
        color: #555;
        background-color: #fff !important;
        box-shadow: 0 4px 18px 0 rgba(0, 0, 0, .12), 0 7px 10px -5px rgba(0, 0, 0, .15) !important;
        z-index: 1000 !important;
        transition: all 150ms ease 0s;

    }

    .navbar.navbar-transparent {
        z-index: 1030;
        background-color: transparent !important;
        box-shadow: none !important;
        padding-top: 25px;
        color: #fff;
    }

    .navbar .navbar-brand {
        position: relative;
        color: inherit;
        height: 50px;
        font-size: 1.125rem;
        line-height: 30px;
        padding: .625rem 0;
        font-weight: 300;
        -webkit-font-smoothing: antialiased;
    }

    .navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
        margin-top: -7px;
        top: 3px;
        position: relative;
        margin-right: 3px;
    }

    .navbar .navbar-nav .nav-item .nav-link .material-icons {
        font-size: 1.25rem;
        max-width: 24px;
        margin-top: -1.1em;
    }

    .navbar .navbar-nav .nav-item .nav-link .fa,
    .navbar .navbar-nav .nav-item .nav-link .material-icons {
        font-size: 1.25rem;
        max-width: 24px;
        margin-top: -1.1em;
    }

    .navbar .navbar-nav .nav-item .nav-link {
        position: relative;
        color: inherit;
        padding: .9375rem;
        font-weight: 400;
        font-size: 12px;
        border-radius: 3px;
        line-height: 20px;
    }

    a .material-icons {
        vertical-align: middle;
    }

    .fixed-top {
        position: fixed;
        z-index: 1030;
        left: 0;
        right: 0;
    }

    .profile-page .page-header {
        height: 380px;
        background-position: center;
    }

    .page-header {
        height: 100vh;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: flex;
        align-items: center;
    }

    .header-filter:after,
    .header-filter:before {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
    }

    .header-filter::before {
        background: rgba(0, 0, 0, .5);
    }

    .main-raised {
        margin: -60px 30px 0;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .main {
        background: #FFF;
        position: relative;
        z-index: 3;
    }

    .profile-page .profile {
        text-align: center;
    }

    .profile-page .profile img {
        max-width: 160px;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate3d(0, -50%, 0);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto;
    }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px;
        color: #3C4858;
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif;
    }

    .profile-page .description {
        margin: 1.071rem auto 0;
        max-width: 600px;
        color: #999;
        font-weight: 300;
    }

    p {
        font-size: 14px;
        margin: 0 0 10px;
    }

    .profile-page .profile-tabs {
        margin-top: 4.284rem;
    }

    .nav-pills,
    .nav-tabs {
        border: 0;
        border-radius: 3px;
        padding: 0 15px;
    }

    .nav .nav-item {
        position: relative;
        margin: 0 2px;
    }

    .nav-pills.nav-pills-icons .nav-item .nav-link {
        border-radius: 4px;
    }

    .nav-pills .nav-item .nav-link.active {
        color: #fff;
        background-color: #e5ce00;
        box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
    }

    .nav-pills .nav-item .nav-link {
        line-height: 24px;
        font-size: 12px;
        font-weight: 500;
        min-width: 100px;
        color: #555;
        transition: all .3s;
        border-radius: 30px;
        padding: 10px 15px;
        text-align: center;
    }

    .nav-pills .nav-item .nav-link:not(.active):hover {
        background-color: rgba(200, 200, 200, .2);
    }


    .nav-pills .nav-item i {
        display: block;
        font-size: 30px;
        padding: 15px 0;
    }

    .tab-space {
        padding: 20px 0 50px;
    }

    .profile-page .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px;
    }

    .profile-page .gallery img {
        width: 100%;
        margin-bottom: 2.142rem;
    }

    .profile-page .profile .name {
        margin-top: -80px;
    }

    img.rounded {
        border-radius: 6px !important;
    }

    .tab-content>.active {
        display: block;
    }

    /*buttons*/
    .btn {
        position: relative;
        padding: 12px 30px;
        margin: .3125rem 1px;
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.428571;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0;
        border: 0;
        border-radius: .2rem;
        outline: 0;
        transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
        will-change: box-shadow, transform;
    }

    .btn.btn-just-icon {
        font-size: 20px;
        height: 41px;
        min-width: 41px;
        width: 41px;
        padding: 0;
        overflow: hidden;
        position: relative;
        line-height: 41px;
    }

    .btn.btn-just-icon fa {
        margin-top: 0;
        position: absolute;
        width: 100%;
        transform: none;
        left: 0;
        top: 0;
        height: 100%;
        line-height: 41px;
        font-size: 20px;
    }

    .btn.btn-link {
        background-color: transparent;
        color: #999;
    }

    /* dropdown */




    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        float: left;
        min-width: 11rem !important;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        background-clip: padding-box;
        border-radius: .25rem;
        transition: transform .3s cubic-bezier(.4, 0, .2, 1), opacity .2s cubic-bezier(.4, 0, .2, 1);
    }

    .dropdown-menu.show {
        transition: transform .3s cubic-bezier(.4, 0, .2, 1), opacity .2s cubic-bezier(.4, 0, .2, 1);
    }


    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu a:active,
    .dropdown-menu a:focus,
    .dropdown-menu a:hover {
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(156, 39, 176, .4);
        background-color: #e5ce00;
        color: #FFF;
    }

    .show .dropdown-toggle:after {
        transform: rotate(180deg);
    }

    .dropdown-toggle:after {
        will-change: transform;
        transition: transform .15s linear;
    }


    .dropdown-menu .dropdown-item,
    .dropdown-menu li>a {
        position: relative;
        width: auto;
        display: flex;
        flex-flow: nowrap;
        align-items: center;
        color: #333;
        font-weight: 400;
        text-decoration: none;
        font-size: .8125rem;
        border-radius: .125rem;
        margin: 0 .3125rem;
        transition: all .15s linear;
        min-width: 7rem;
        padding: 0.625rem 1.25rem;
        min-height: 1rem !important;
        overflow: hidden;
        line-height: 1.428571;
        text-overflow: ellipsis;
        word-wrap: break-word;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item {
        padding: .75rem 1.25rem .75rem .75rem;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
        vertical-align: middle;
        font-size: 24px;
        position: relative;
        margin-top: -4px;
        top: 1px;
        margin-right: 12px;
        opacity: .5;
    }

    /* footer */

    footer {
        margin-top: 10px;
        color: #555;
        padding: 25px;
        font-weight: 300;

    }

    .footer p {
        margin-bottom: 0;
        font-size: 14px;
        margin: 0 0 10px;
        font-weight: 300;
    }

    footer p a {
        color: #555;
        font-weight: 400;
    }

    footer p a:hover {
        color: #9f26aa;
        text-decoration: none;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .notes {
        color: #999;
        font-size: 12px;
    }

    .media-body {
        position: relative;
    }

    .media-date {
        position: absolute;
        right: 25px;
        top: 25px;
    }

    .media-date li {
        padding: 0;
    }

    .media-date li:first-child:before {
        content: '';
    }

    .media-date li:before {
        content: '.';
        margin-left: -2px;
        margin-right: 2px;
    }

    .media-comment {
        margin-bottom: 20px;
    }

    .media-replied {
        margin: 0 0 20px 50px;
    }

    .media-replied .media-heading {
        padding-left: 6px;
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px;
    }

    .reviews {
        color: #555;
        font-weight: bold;
        margin: 10px auto 20px;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }

    .btn-group {
        margin-top: 0px !important;
    }

    .btn-circle span {
        padding-right: 6px;
    }

</style>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100"
        id="sectionsNav">
        <div class="container">


            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-key"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true"
        style="background-image:url({{ asset('images/logo2.jpg') }});">
    </div>


    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{ asset('/' . $user->avatar) }}" alt="Circle Image" style="height: 160px;"
                                    class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">{{ $user->prenom }} {{ $user->nom }}</h3>
                                <h4>{{ $user->niveau }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <ul class="list-group list-group-unbordered mb-3" style="color: #3C4858;
                    margin-left: 202px;">
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Téléphone</b> <a class="float-right">{{ $user->phone }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>CV</b> <a class="float-right"
                                href="{{ asset('/cv/' . $user->cv) }} ">{{ $user->cv }}</a>
                        </li>








                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                @if (Session::has('tab'))
                                    <li class="nav-item">
                                        <a class="nav-link " href="#Offres" role="tab" data-toggle="tab">
                                            <i class="material-icons">work</i>
                                            Offres
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#Compétences" role="tab" data-toggle="tab">
                                            <i class="material-icons">school</i>
                                            Compétences

                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#Certif" role="tab" data-toggle="tab">
                                            <i class="material-icons">card_membership</i>
                                            Certifications

                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#Settings" role="tab" data-toggle="tab">
                                            <i class="material-icons">manage_accounts</i>
                                            Profile
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#Offres" role="tab" data-toggle="tab">
                                            <i class="material-icons">work</i>
                                            Offres
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#Compétences" role="tab" data-toggle="tab">
                                            <i class="material-icons">school</i>
                                            Compétences

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Certif" role="tab" data-toggle="tab">
                                            <i class="material-icons">card_membership</i>
                                            Certifications

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Settings" role="tab" data-toggle="tab">
                                            <i class="material-icons">manage_accounts</i>
                                            Profile
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content tab-space">
                    @if (Session::has('tab'))
                        <div class="tab-pane  text-center gallery" id="Offres">
                        @else
                            <div class="tab-pane active text-center gallery" id="Offres">
                    @endif
                    <ul class="media-list">





                        @foreach ($offres as $offre)
                            <li class="media">
                                <a class="pull-left" href="#" style="    padding: 32px;">
                                    <img class="media-object img-circle img-raised rounded-circle img-fluid"
                                        src="{{ asset('/' . $offre->User->avatar) }}"
                                        style="height: 180px!important;width: 180px!important;">
                                </a>
                                <div class="media-body">
                                    <div class="well well-lg" style="text-align: left;">
                                        <h4 class="media-heading text-uppercase reviews">
                                            {{ $offre->User->prenom }}</h4>
                                        <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">{{ $offre->updated_at }}</li>

                                        </ul>
                                        <h3>{{ $offre->poste }}</h3>
                                        <p class="media-comment">
                                            @foreach ($offre->Techno()->get() as $techno)
                                                {{ $techno->titre }} ,
                                            @endforeach
                                            <br>
                                            {{ $offre->description }}
                                        </p>
                                        <p>

                                        <h4> Deadline : {{ $offre->deadline }}</h4>
                                        </p>
                                       
                                        @if ($user->Offre()->where('offre_id', $offre->id)->first() == null)
                                         @if(Carbon\Carbon::parse($offre->deadline) >= Carbon\Carbon::today())
                                       
                                            <form action="{{ url('postuler', $offre->id) }}"
                                                enctype="multipart/form-data" class="form-horizontal" method="POST">
                                                {{ csrf_field() }}
                                                <input type="file" name="pdf"
                                                    style="    top: 9%;left: 25%;width: 41%;height: 14%;color: #fff;text-align: center;line-height: 36px;text-transform: uppercase;background-color: rgba(0,0,0,.3);border-radius: 50px;cursor: pointer;"></input>
                                                <button class="btn btn-warning btn-circle text-uppercase"
                                                    style="background-color: #e5ce00;color: aliceblue;border-radius: 50px;">Postuler</button>
                                            </form>
                                    </div>
                                                            @else
                         <p style="    color: red;"> *cette offre a été expiré 
                                        
                                    </p>
                                     @endif
                                @else
                                    <p> Vous avez postulé déjà le
                                        {{ $user->Offre()->where('offre_id', $offre->id)->first()->created_at }}
                                    </p>
                        @endif


                       
                </div>

                </li>



                <!-- /.post -->
                @endforeach
                </ul>
            </div>
            @if (Session::has('tab'))
                <div class="tab-pane text-center active gallery" id="Compétences">
                @else
                    <div class="tab-pane text-center gallery" id="Compétences">
            @endif

            <form action="{{ route('profileetudiant.competence', $user->id) }}" enctype="multipart/form-data"
                class="form-horizontal" method="POST">
                {{ csrf_field() }}

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div for="inputName" class="col-sm-2 col-form-label"><label>Compétences</label></div>
                    <div class="col-sm-2">
                        <select class="selectpicker" id="competence[]" name="competence[]" multiple
                            data-live-search="true" title="Choisir vos compétences">
                            @foreach ($technos as $techno)
                                <option value="{{ $techno->id }}">{{ $techno->titre }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger"
                            style="background-color: #e5ce00;color: aliceblue;">Add</button>
                    </div>
                </div>




            </form>
            <div class="row">
                <div class="col-2">
                    Compétences
                </div>
                <div class="col-10">
                    <ul class="list-group list-group-unbordered mb-3" style="color: #3C4858;
                    ">

                        @foreach ($user->Techno()->get() as $techno)

                            <li class="list-group-item">
                                <b>{{ $techno->titre }}</b><a href="{{ url('removetechno/' . $techno->id) }}">
                                    <i class="fa fa-trash" style="color: red;font-size: x-large;"></i></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>


        </div>



        <div class="tab-pane text-center gallery" id="Certif">


            <form action="{{ route('profileetudiant.certif', $user->id) }}" enctype="multipart/form-data"
                class="form-horizontal" method="POST">
                {{ csrf_field() }}

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div for="inputName" class="col-sm-2 col-form-label"><label>Certifications</label></div>
                    <div class="col-sm-2">
                        <select class="selectpicker" id="certif[]" name="certif[]" multiple data-live-search="true"
                            title="Choisir vos Certif">
                            @foreach ($certifs as $certif)
                                <option value="{{ $certif->id }}">{{ $certif->titre }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger"
                            style="background-color: #e5ce00;color: aliceblue;">Add</button>
                    </div>
                </div>




            </form>
            <div class="row">
                <div class="col-2">
                    Certif
                </div>
                <div class="col-10">
                    <ul class="list-group list-group-unbordered mb-3" style="color: #3C4858;
                    ">

                        @foreach ($user->Certif()->get() as $certif)

                            <li class="list-group-item">
                                <b>{{ $certif->titre }}</b><a href="{{ url('removecertif/' . $certif->id) }}">
                                    <i class="fa fa-trash" style="color: red;font-size: x-large;"></i></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>




        <div class="tab-pane text-center gallery" id="Settings">

            <form action="{{ route('profileetudiant.update', $user->id) }}" enctype="multipart/form-data"
                class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                    <div for="photo" class="col-md-2 control-label"></div>
                    <div class="col-md-12">
                        <div class="input-group uploaded-file-group" style="place-content: center;
    padding-left: 200px;">
                            <label class="input-group-btn">

                                <span class="">

                                    <img id="blah" src="{{ url('/' . $user->avatar) }}" alt=" "
                                        style="height:260px;width:260px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;" />

                                    <input type="file" name="avatar" onchange="readURL(this);" id="avatar"
                                        style="top: 9%;left: 25%;width: 54%;height: 14%;color: #fff;text-align: center;line-height: 36px;text-transform: uppercase;background-color: rgba(0,0,0,.3);border-radius: 50px;cursor: pointer;"
                                        class="hidden" multiple>
                                </span>
                            </label>

                        </div>


                        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class=" row" style="padding-top: 1.75rem;">
                    <div for="inputName" class="col-sm-2 col-form-label">Nom</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}">
                    </div>
                </div>


                <div class=" row" style="padding-top: 1.75rem;">
                    <label for="inputName" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prenom" name="prenom"
                            value="{{ $user->prenom }}">
                    </div>
                </div>
                <div class=" row" style="padding-top: 1.75rem;">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class=" row" style="padding-top: 1.75rem;">
                    <label for="phone" class="col-sm-2 col-form-label">Téléphone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
                    </div>
                </div>
                <div class=" row" style="padding-top: 1.75rem;">
                    <label for="niveau" class="col-sm-2 col-form-label">Niveau</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="niveau" value="{{ $user->niveau }}">
                    </div>
                </div>
                <div class=" row" style="padding-top: 1.75rem;">
                    <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                </div>
                <div class=" row" style="padding-top: 1.75rem;">
                    <div for="inputName" class="col-sm-2 col-form-label">CV</div>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="pdf" name="pdf" value="{{ $user->cv }}">
                    </div>
                </div>

                <div class=" row" style="padding-top: 1.75rem;">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" style="background: #e5ce00;color: aliceblue;"
                            class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </form>

        </div>


    </div>
    </div>
    </div>
    </div>
</body>
<footer class="footer text-center ">

</footer>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
    integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
    integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }

</script>
<script type="text/javascript">
    var big_image;

    $(document).ready(function() {
        window.history.pushState('', null, './profileetudiant');
  $(window).on('popstate', function() {
   location.reload(true);
});
        $('#competence').selectpicker();
        BrowserDetect.init();

        // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
        $('body').bootstrapMaterialDesign();

        window_width = $(window).width();

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        $navbar_collapse = $('.navbar').find('.navbar-collapse');

        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // Activate Popovers
        $('[data-toggle="popover"]').popover();

        if ($('.navbar-color-on-scroll').length != 0) {
            $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
        }

        materialKit.checkScrollForTransparentNavbar();

        if (window_width >= 768) {
            big_image = $('.page-header[data-parallax="true"]');
            if (big_image.length != 0) {
                $(window).on('scroll', materialKit.checkScrollForParallax);
            }

        }


    });

    $(document).on('click', '.navbar-toggler', function() {


        $toggle = $(this);

        if (materialKit.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 550);

            $('html').removeClass('nav-open-absolute');
        } else {
            setTimeout(function() {
                $toggle.addClass('toggled');
            }, 580);


            div = '<div id="bodyClick"></div>';
            $(div).appendTo("body").click(function() {
                $('html').removeClass('nav-open');

                if ($('nav').hasClass('navbar-absolute')) {
                    $('html').removeClass('nav-open-absolute');
                }
                materialKit.misc.navbar_menu_visible = 0;
                $('#bodyClick').remove();
                setTimeout(function() {
                    $toggle.removeClass('toggled');
                }, 550);
            });

            if ($('nav').hasClass('navbar-absolute')) {
                $('html').addClass('nav-open-absolute');
            }

            $('html').addClass('nav-open');
            materialKit.misc.navbar_menu_visible = 1;
        }
    });

    materialKit = {
        misc: {
            navbar_menu_visible: 0,
            window_width: 0,
            transparent: true,
            fixedTop: false,
            navbar_initialized: false,
            isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
        },

        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        },

        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        },

        checkScrollForParallax: function() {
            oVal = ($(window).scrollTop() / 3);
            big_image.css({
                'transform': 'translate3d(0,' + oVal + 'px,0)',
                '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
                '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
                '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
                if (materialKit.misc.transparent) {
                    materialKit.misc.transparent = false;
                    $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                }
            } else {
                if (!materialKit.misc.transparent) {
                    materialKit.misc.transparent = true;
                    $('.navbar-color-on-scroll').addClass('navbar-transparent');
                }
            }
        }, 17)
    };

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    };

    var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator
                .appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
                var dataString = data[i].string;
                this.versionSearchString = data[i].subString;

                if (dataString.indexOf(data[i].subString) !== -1) {
                    return data[i].identity;
                }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
                return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
                return parseFloat(dataString.substring(rv + 3));
            } else {
                return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "Chrome"
            },
            {
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Trident",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "Firefox"
            },
            {
                string: navigator.userAgent,
                subString: "Safari",
                identity: "Safari"
            },
            {
                string: navigator.userAgent,
                subString: "Opera",
                identity: "Opera"
            }
        ]

    };

</script>
</body>

</html>
