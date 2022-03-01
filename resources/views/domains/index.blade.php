@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="card card-default">

   


         <div class="card-header">
                    <h3 class="card-title">Domains</h3>
                    <a type="button" class="btn btn-success float-right" href="{{ route('domains.domain.create') }}"> <i
                            class="fa fa-plus"></i></a>
                </div>


        
        @if(count($domains) == 0)
            <div class="card-body text-center">
                <h4>No Domains Available.</h4>
            </div>
        @else
        <div class="card-body card-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Title</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($domains as $domain)
                        <tr>
                            <td>{{ $domain->title }}</td>

                            <td>

                                <form method="POST" action="{!! route('domains.domain.destroy', $domain->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('domains.domain.show', $domain->id ) }}" class="btn btn-info" title="Show Domain">
                                          
                                       <i class="fa fa-eye">
                             Détails</i>

                                                      
                                        </a>
                                        <a href="{{ route('domains.domain.edit', $domain->id ) }}" class="btn btn-primary" title="Edit Domain">
                                              <i class="fa fa-edit">
                                                    Modifier</i> 

                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Domain" onclick="return confirm(&quot;Click Ok to delete Domain.&quot;)">
                                           <i class="fa fa-trash">Supprimer</i>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="card-footer">
            {!! $domains->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection