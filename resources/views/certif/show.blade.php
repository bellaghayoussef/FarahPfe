@extends('layouts.app')
@section('title', 'Certif')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Certif Show </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>

                        <div class="col-md-6">
                            {{ $certif->titre }}

                        </div>
                    </div>

                    <div class="box-footer">
                        <a href="javascript:history.back()" class="btn btn-default">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
