@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Offre' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('offres.offre.destroy', $offre->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('offres.offre.index') }}" class="btn btn-primary" title="Show All Offre">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('offres.offre.create') }}" class="btn btn-success" title="Create New Offre">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('offres.offre.edit', $offre->id ) }}" class="btn btn-primary" title="Edit Offre">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Offre" onclick="return confirm(&quot;Click Ok to delete Offre.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User</dt>
            <dd>{{ optional($offre->user)->nom }}</dd>
            <dt>Poste</dt>
            <dd>{{ $offre->poste }}</dd>
            <dt>Salaire</dt>
            <dd>{{ $offre->salaire }}</dd>
            <dt>Deadline</dt>
            <dd>{{ $offre->deadline }}</dd>
            <dt>Description</dt>
            <dd>{{ $offre->description }}</dd>
            <dt>Created At</dt>
            <dd>{{ $offre->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $offre->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection