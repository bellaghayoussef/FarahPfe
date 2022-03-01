@extends('layouts.app')
@section('title', 'Offre')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Offre Show </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @can('admin')
              <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">User Name</label>


                            <div class="col-md-6">
                               {{ $offre->User->nom }}


                            </div>
                        </div>
              @endcan

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Poste</label>

                            <div class="col-md-6">

                               {{$offre->poste}}

                            </div>
                        </div>



                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Salaire</label>

                            <div class="col-md-6">

                               {{$offre->salaire}}


                            </div>
                        </div>


                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Deadline</label>

                            <div class="col-md-6">

                               {{$offre->deadline}}


                            </div>
                        </div>



                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">

                               {{$offre->description}}

                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Test Technique</label>

                            <div class="col-md-6">
                                @if($offre->test == '1')
                                <a href="{{ route('showtest',[$offre->test_id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view') Test</a>

                                @elseif($offre->test == '2')

                            <a href="{{asset('/test')}}/{{$offre->lien}}">{{$offre->lien}}</a>
                            @else
                            Aucun test
                            @endif

                            </div>
                        </div>

                         <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Nombre des Candidats</label>

                            <div class="col-md-6">

                                {{ $offre->Users->count() }}
                          @can('client')
                          @if( $offre->Users->count() > 0 )
                          <a type="button" class="btn btn-success" href="{{ route('offre.candidats',$offre->id) }}"><i class="fa fa-eye"></i> </a>
                          @endif
                          @endcan

                            </div>
                        </div>







                        </div>

                        <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-success float-right">Back</a>

              </div>
</div>
</div>
</div>
</div>

@endsection
