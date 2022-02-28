@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Techno' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('technos.techno.destroy', $techno->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('technos.techno.index') }}" class="btn btn-primary" title="Show All Techno">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('technos.techno.create') }}" class="btn btn-success" title="Create New Techno">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('technos.techno.edit', $techno->id ) }}" class="btn btn-primary" title="Edit Techno">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Techno" onclick="return confirm(&quot;Click Ok to delete Techno.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Titre</dt>
            <dd>{{ $techno->titre }}</dd>
            <dt>Domain</dt>
            <dd>{{ optional($techno->domain)->id }}</dd>
            <dt>Created At</dt>
            <dd>{{ $techno->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $techno->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection