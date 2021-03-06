<!DOCTYPE html>
<!-- saved from url=(0044)https://www.juniorscv.com/public/admin/login -->
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - Juniors CV</title>
    <link rel="stylesheet" href="{{ asset('/adminlogin/voyager-assets') }}">
    <style>
        body {
            background-image: url('{{ asset('images/1.jpg') }}');
            background-color: #FFFFFF;
        }

        body.login .login-sidebar {
            border-top: 5px solid #E73A3A;
        }

        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top: 0px !important;
                border-left: 5px solid #E73A3A;
            }
        }

        body.login .form-group-default.focused {
            border-color: #E73A3A;
        }

        .login-button,
        .bar:before,
        .bar:after {
            background: #E73A3A;
        }

        .remember-me-text {
            padding: 0 5px;
        }

        body {
            padding: 10px;

        }


        #exTab2 h3 {
            color: white;
            background-color: #428bca;
            padding: 5px 15px;
        }

        /* remove border radius for the tab */

        #exTab1 .nav-pills>li>a {
            border-radius: 0;
        }

        /* change border radius for the tab , apply corners on top*/

        #exTab3 .nav-pills>li>a {
            border-radius: 4px 4px 0 0;
        }

        #exTab3 .tab-content {
            color: white;
            background-color: #428bca;
            padding: 5px 15px;
        }

        .nav-tabs>li.active>a {
            background-color: transparent !important;
            border-color: transparent transparent #E73A3A !important;
            color: #E73A3A !important;

        }

    </style>

    <link href="{{ asset('/adminlogin/css.css') }}" rel="stylesheet">
</head>

<body class="login" cz-shortcut-listen="true" style="overflow: scroll;height: auto;">
    <div class="container-fluid">
        <div class="row">
            <div class="faded-bg animated"></div>
            <div class="hidden-xs col-sm-7 col-md-8">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-10 col-md-offset-2">
                        <div class="logo-title-container">
                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn"
                                src="{{ asset('/images/logo-epi.svg') }}" alt="Logo Icon">
                            <div class="copy animated fadeIn">
                                <h1>EPI</h1>
                                <p>Welcome to EPI application.</p>
                            </div>
                        </div> <!-- .logo-title-container -->
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar" style="    height: 820px;">


                <div class="login-container" style="top: auto;margin-top: auto;">
                    <div id="exTab2" class="container">
                        <ul class="nav nav-tabs">
                            <li class="active" style="">
                                <a href="#1" data-toggle="tab">Login</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">Sign Up</a>
                            </li>

                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">

                                <p>Sign In Below:</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group form-group-default focused" id="emailGroup">
                                        <label>E-mail</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" value="" placeholder="E-mail"
                                                class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default focused" id="passwordGroup">
                                        <label>Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="checkbox" name="remember" id="remember" value="1"><label
                                                for="remember" class="remember-me-text">Remember me</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-block login-button">
                                        <span class="signingin hidden"><span class="voyager-refresh"></span> Logging
                                            in...</span>
                                        <span class="signin">Login</span>
                                    </button>

                                </form>

                                <div style="clear:both"></div>

                            </div>

                            <div class="tab-pane" id="2">
                                <form class="signup-form" method="POST" action="{{ route('register') }}"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="form-group form-group-default focused">
                                        <label>Nom</label>
                                        <input type="text" class="form-control form-group-default" name="nom"
                                            placeholder="Nom">
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Pr??nom</label>
                                        <input type="text" class="form-control form-group-default" name="prenom"
                                            placeholder="prenom">
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control form-group-default" name="email"
                                            placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>T??lephone</label>
                                        <input type="number" class="form-control form-group-default" name="phone"
                                            placeholder="22000000">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Mot de passe</label>
                                        <input type="password" class="form-control form-group-default" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Confirmer le mot de passe</label>
                                        <input type="password" class="form-control form-group-default"
                                            name="password_confirmation" placeholder="Password confirm">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Cat??gorie</label>
                                        <select class="form-control form-group-default" name="categorie" id="categorie">
                                            <option style="background:#A0A0A0;">Choix </option>
                                            <option style="background:#A0A0A0;" value="client">Client</option>
                                            <option style="background:#A0A0A0;" value="etudiant">Etudiant</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-default hidden focused" id="matricule">
                                        <label>Matricule</label>
                                        <input type="text" class="form-control form-group-default " name="matricule"
                                            autocomplete="off" placeholder="matricule">
                                        @error('matricule')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default hidden focused" id="niveau">
                                        <label>Niveau</label>
                                        <input type="text" class="form-control form-group-default " name="niveau"
                                            autocomplete="off" placeholder="niveau">
                                        @error('niveau')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default hidden focused" id="organisme">
                                        <label>Organisme</label>
                                        <input type="text" class="form-control form-group-default " name="organisme"
                                            autocomplete="off" placeholder="organisme">
                                        @error('organisme')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default hidden focused" id="cin">
                                        <label>CIN</label>
                                        <input type="number" class="form-control form-group-default " name="cin"
                                            autocomplete="off" placeholder="cin">
                                        @error('cin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-block login-button">
                                        <span class="signingin hidden"><span class="voyager-refresh"></span> Logging
                                            in...</span>
                                        <span class="signin">Sign Up</span>
                                    </button>


                                </form>
                            </div>

                        </div>
                    </div>




                </div> <!-- .login-container -->

            </div> <!-- .login-sidebar -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        //categorie pour s??parer le client d'une cot?? et l'??tudiant

        $(document).ready(function() {



            $('#categorie').change(function() {
                console.log($(this).val());
                if ($(this).val() == "client") {
                    document.getElementById("organisme").classList.remove('hidden');
                    document.getElementById("cin").classList.remove('hidden');
                    document.getElementById("matricule").classList.add('hidden');
                    document.getElementById("niveau").classList.add('hidden');

                }
                if ($(this).val() == "etudiant") {

                    document.getElementById("matricule").classList.remove('hidden');
                    document.getElementById("niveau").classList.remove('hidden');
                    document.getElementById("organisme").classList.add('hidden');
                    document.getElementById("cin").classList.add('hidden');

                }



            });


        });

    </script>
</body>

</html>
