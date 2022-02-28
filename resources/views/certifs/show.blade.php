@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Certif' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('certifs.certif.destroy', $certif->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('certifs.certif.index') }}" class="btn btn-primary" title="Show All Certif">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('certifs.certif.create') }}" class="btn btn-success" title="Create New Certif">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('certifs.certif.edit', $certif->id ) }}" class="btn btn-primary" title="Edit Certif">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Certif" onclick="return confirm(&quot;Click Ok to delete Certif.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Titre</dt>
            <dd>{{ $certif->titre }}</dd>
            <dt>Created At</dt>
            <dd>{{ $certif->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $certif->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection