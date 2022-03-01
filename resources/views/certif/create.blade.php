@extends('layouts.app')
@section('title', 'Certif')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Certif Add </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('certif.store') }}" enctype="multipart/form-data" class="form-horizontal"
                        method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror"
                                    name="titre" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="box-footer">
                            <a href="javascript:history.back()" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-success float-right">Add</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
