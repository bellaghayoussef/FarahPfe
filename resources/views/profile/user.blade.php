@extends('layouts.app')
@section('title', 'Profile')
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('/' . $user->avatar) }}"
                                    style="height: 100px;" alt="User profile picture">


                            </div>

                            <h2 class="profile-username text-center"><i>{{ ucfirst($user->prenom) }}
                                    {{ mb_strtoupper($user->nom) }}
                                </i> </h2>


                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Adresse E-mail</b> <a class="float-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Télephone</b> <a class="float-right">{{ $user->phone }}</a>
                                </li>
                                @if ($user->hasAnyRole('client'))
                                    <li class="list-group-item">
                                        <b>Organisme</b> <a class="float-right">{{ $user->organisme }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>CIN</b> <a class="float-right">{{ $user->cin }}</a>
                                    </li>

                                @endif

                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2" style="background: #e5ce00!important;">
                            <ul class="nav nav-pills">

                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"
                                        style="    color: black;                                   ">Gestion du
                                        profile</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">



                                <div class="tab-pane active" id="settings">
                                    <form method="POST" class="form-horizontal"
                                        action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data"
                                        novalidate>
                                        {{ csrf_field() }}


                                        <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                                            <label for="avatar" class="col-md-2 control-label"></label>
                                            <div class="col-md-10" style="margin-left: 70px;">
                                                <div class="input-group uploaded-file-group">
                                                    <label class="input-group-btn">

                                                        <span class="btn btn-default">
                                                            @if (isset($user->avatar) && !empty($user->avatar))
                                                                <img id="blah" src="{{ asset('/' . $user->avatar) }}"
                                                                    alt=" "
                                                                    style="height:160px;width:160px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;" />

                                                                     
                                                            @else
                                                                <img id="blah" src="{{ asset('/images/user.jpg') }}"
                                                                    alt=" "
                                                                    style="height:160px;width:160px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;" />
                                                            @endif
                                                            <input type="file" name="avatar" onchange="readURL(this);"
                                                                id="avatar"
                                                                style="top: 9%;left: 25%;width: 57%;height: 14%;color: #fff;text-align: center;line-height: 24px;text-transform: uppercase;background-color: rgba(0,0,0,.3);border-radius: 50px;cursor: pointer;"
                                                                class="hidden">
                                                        </span>
                                                    </label>

                                                </div>


                                                {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                                            <div class="col-md-6">
                                                <input id="nom" type="text"
                                                    class="form-control @error('nom') is-invalid @enderror" name="nom"
                                                    value="{{ $user->nom }}" required autocomplete="nom" autofocus>

                                                @error('nom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Prenom</label>

                                            <div class="col-md-6">
                                                <input id="prenom" type="text"
                                                    class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                                    value="{{ $user->prenom }}" required autocomplete="prenom" autofocus>

                                                @error('prenom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Adresse
                                                E-mail</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ $user->email }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de
                                                passe</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" >

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label for="phone"
                                                class="col-md-4 col-form-label text-md-right">Telephone</label>

                                            <div class="col-md-6">
                                                <input id="phone" type="number"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ $user->phone }}" required>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        @if ($user->hasAnyRole('client'))

                                            <div class="form-group row " id="organisme_div">
                                                <label for="organisme"
                                                    class="col-md-4 col-form-label text-md-right">Organisme</label>

                                                <div class="col-md-6">
                                                    <input id="organisme" type="text"
                                                        class="form-control @error('organisme') is-invalid @enderror"
                                                        value="{{ $user->organisme }}" name="organisme" required>

                                                    @error('organisme')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row " id="cin_div">
                                                <label for="cin" class="col-md-4 col-form-label text-md-right">CIN</label>

                                                <div class="col-md-6">
                                                    <input id="cin" type="number"
                                                        class="form-control @error('cin') is-invalid @enderror" name="cin"
                                                        value="{{ $user->cin }}" required>

                                                    @error('cin')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        @endif

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit"
                                                    class="btn btn-danger float-right">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


@endsection


@section('js')
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

@endsection
