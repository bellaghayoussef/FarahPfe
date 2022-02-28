<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Farahpfe</title>
    <link rel="stylesheet" href="{{ asset('/adminlogin/voyager-assets') }}">
    <style>
        body {
            background-image: url('{{ asset('images/') }}');
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
            background-position: center !important;
            background-color: #FFFFFF;
        }

        body.login .login-sidebar {
            border-top: 5px solid #e5ce00;
        }

        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top: 0px !important;
                border-left: 5px solid #e5ce00;
            }
        }

        body.login .form-group-default.focused {
            border-color: #e5ce00;
        }

        .login-button,
        .bar:before,
        .bar:after {
            background: #e5ce00;
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
            border-color: transparent transparent #e5ce00 !important;
            color: #e5ce00 !important;

        }
        .invalid-feedback{
        color:red;}

    </style>

    <link href="{{ asset('/adminlogin/css.css') }}" rel="stylesheet">
</head>

<body class="login" cz-shortcut-listen="true" style="overflow: scroll;height: 232%;">
    <div class="container-fluid" style="height: 109%;">
        <div class="row" style="    height: 100%;">
            <div class="faded-bg animated"></div>
            <div class="hidden-xs col-sm-7 col-md-8">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-10 col-md-offset-2">
                        <div class="logo-title-container">
                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn"
                                src="{{ asset('images/') }}" style="    max-width: 158px!important;"
                                alt="Logo Icon">
                            <div class="copy animated fadeIn">

                            </div>
                        </div> <!-- .logo-title-container -->
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar" style="    height: inherit;">


                <div class="login-container" style="top: auto;margin-top: auto;">
                    <div id="exTab2" class="container">
                        <ul class="nav nav-tabs">
                     
                         <li class="active" style="">
                                <a href="#1" data-toggle="tab">Connexion</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">S'inscrire</a>
                            </li>

                      
                           
                        </ul>

                        <div class="tab-content ">
          
                        <div class="tab-pane active" id="1">
                       
                                <p>CONNECTEZ-VOUS CI-DESSOUS :</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group form-group-default focused" id="emailGroup">
                                        <label>E-mail </label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" value="" placeholder="E-mail"
                                                class="form-control" required="">
                                                 @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default focused" id="passwordGroup">
                                        <label>Mot de passe</label>
                                        <div class="controls">
                                            <input type="password" name="password" placeholder="Mot de passe"
                                                class="form-control" required="">
                                                      @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                  
                                    <button type="submit" class="btn btn-block login-button" name="login">
                                        <span class="signingin hidden"><span class="voyager-refresh"></span> Logging
                                            in...</span>
                                        <span class="signin">Connexion</span>
                                    </button>

                                </form>

                                <div style="clear:both"></div>

                            </div>
              
                        <div class="tab-pane " id="2">
                     
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
                                        <label>Prénom</label>
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
                                        <label>Télephone</label>
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
                                            placeholder="Mot de passe">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Confirmer le mot de passe</label>
                                        <input type="password" class="form-control form-group-default"
                                            name="password_confirmation" placeholder="Mot de passe confirm">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-group-default focused">
                                        <label>Catégorie</label>
                                        <select class="form-control form-group-default" name="categorie" id="categorie">
                                            <option style="background:#A0A0A0;">choisissez votre catégorie </option>
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
                                    <button type="submit" class="btn btn-block login-button" name="register">
                                        <span class="signingin hidden"><span class="voyager-refresh"></span> Logging
                                            in...</span>
                                        <span class="signin">S'inscrire</span>
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
        //categorie pour séparer le client d'une coté et l'étudiant

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
