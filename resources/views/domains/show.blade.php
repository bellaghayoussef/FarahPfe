@extends('layouts.app')

@section('content')

<div class="card card-default">




         <div class="card-header">
                    <h3 class="card-title">{{ isset($domain->title) ? $domain->title : 'Domain' }}</h3>
                     <form  class="float-right" method="POST" action="{!! route('domains.domain.destroy', $domain->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('domains.domain.index') }}" class="btn btn-primary" title="Show All Domain">
                    
                        <i class="fa fa-list"></i>
                    </a>

                    <a href="{{ route('domains.domain.create') }}" class="btn btn-success" title="Create New Domain">
                        <i class="fa fa-plus"></i>
                    </a>
                    
                    <a href="{{ route('domains.domain.edit', $domain->id ) }}" class="btn btn-primary" title="Edit Domain">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Domain" onclick="return confirm(&quot;Click Ok to delete Domain.?&quot;)">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </form>
                </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $domain->title }}</dd>

        </dl>

    </div>
</div>

@endsection