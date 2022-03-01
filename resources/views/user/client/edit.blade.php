@extends('layouts.app')
@section('title', 'client')
@section('content')

<div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">client Edit</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
              
                 

                  <div class="tab-pane active" id="settings">
                   <form method="POST" class="form-horizontal" action="{{ route('update_client',$user->id) }}" enctype="multipart/form-data" novalidate>
                         {{ csrf_field() }}

                         
<div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
    <label for="avatar" class="col-md-2 control-label"></label>
    <div class="col-md-10">
        <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
               
                <span class="btn btn-default">
                     @if (isset($user->avatar) && !empty($user->avatar))
                     <img id="blah" src="{{asset('/'.$user->avatar)}}" alt=" " style="height:160px;width:160px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;"/>
                     @else
                      <img id="blah" src="{{asset('/images/user.jpg')}}" alt=" " style="height:160px;width:160px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;"/>
                     @endif
                     <input type="file" name="avatar" onchange="readURL(this);" id="avatar" style="top: 9%;left: 25%;width: 54%;height: 14%;color: #fff;text-align: center;line-height: 36px;text-transform: uppercase;background-color: rgba(0,0,0,.3);border-radius: 50px;cursor: pointer;" class="hidden">
                </span>
            </label>
          
        </div>

       
        {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
    </div>
</div>


                      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $user->nom }}" required autocomplete="name" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $user->prenom }}" required autocomplete="name" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                       
                       
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Telephone</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                  
                     
                        <div class="form-group row " id="organisme_div">
                            <label for="organisme" class="col-md-4 col-form-label text-md-right">organisme</label>

                            <div class="col-md-6">
                                <input id="organisme" type="text" class="form-control @error('organisme') is-invalid @enderror" value="{{ $user->organisme }}" name="organisme" required>

                                @error('organisme')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row " id="cin_div">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">cin</label>

                            <div class="col-md-6">
                                <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ $user->cin }}" required>

                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger float-right">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
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