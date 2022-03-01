@extends('layouts.app')
@section('title', 'Etudiant')
@section('content')

<div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Etudiant Show</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
              
                 

                  <div class="tab-pane active" id="settings">
                 

                         
<div class="form-group">
    <label for="avatar" class="col-md-2 control-label"></label>
    <div class="col-md-10">
        <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
               
                <span class="btn btn-default">
                <img id="blah" src="{{asset('/'.$user->avatar)}}" alt=" " style="height:160px;width:160px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;"/>

                     </span>
            </label>
          
        </div>

  
    </div>
</div>


                      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">nom</label>

                            <div class="col-md-6">
                                {{ $user->nom }}

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">prenom</label>

                            <div class="col-md-6">
                              {{ $user->prenom }}

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                               {{ $user->email }}

                              
                            </div>
                        </div>

                       
                       
                       
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Telephone</label>

                            <div class="col-md-6">
                                {{ $user->phone }}

                               
                            </div>
                        </div>

                  
                     
                        <div class="form-group row " id="organisme_div">
                            <label for="organisme" class="col-md-4 col-form-label text-md-right">matricule</label>

                            <div class="col-md-6">
                                {{ $user->matricule }}

                            </div>
                        </div>

                        <div class="form-group row " id="cin_div">
                            <label for="niveau" class="col-md-4 col-form-label text-md-right">niveau</label>

                            <div class="col-md-6">
                                {{ $user->niveau }}

                                
                            </div>
                        </div>

                        

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                      </div>
                 
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            @endsection

     