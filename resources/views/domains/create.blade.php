@extends('layouts.app')

@section('content')

    <div class="card card-default">

      


 <div class="card-header">
                    <h3 class="card-title">Create New Domain</h3>
                    <a type="button" class="btn btn-success float-right" href="{{ route('domains.domain.index') }}"> <i
                            class="fa fa-list"></i></a>
                </div>


        <div class="card-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('domains.domain.store') }}" accept-charset="UTF-8" id="create_domain_form" name="create_domain_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('domains.form', [
                                        'domain' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary float-right" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


