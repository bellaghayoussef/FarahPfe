@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-header clearfix">

            <div class="float-left">
                <h4 class="mt-5 mb-5">{{ !empty($domain->title) ? $domain->title : 'Domain' }}</h4>
            </div>
            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('domains.domain.index') }}" class="btn btn-primary" title="Show All Domain">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('domains.domain.create') }}" class="btn btn-success" title="Create New Domain">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('domains.domain.update', $domain->id) }}" id="edit_domain_form" name="edit_domain_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('domains.form', [
                                        'domain' => $domain,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection