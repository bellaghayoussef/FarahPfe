@extends('layouts.app')
@section('title', 'Offre')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 1.6rem;"><i>Liste des offres</i></h2>
                    <a type="button" class="btn btn-success float-right"
                        style="background-color: #28A896;border-color: #28A896;" href="{{ route('offre.create') }}">Créer
                        Offre</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                @can('admin')
                                    <th>User Name</th>
                                @endcan
                                <th>Poste</th>
                                <th>Salaire</th>
                                <th>Deadline</th>
                                <th>Description</th>
                                <th>Compétences</th>
                                <th>Candidats </th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($offres as $offre)
                                <tr>
                                    @can('admin')
                                        <td>{{ $offre->User->nom }} </td>
                                    @endcan
                                    <td>{{ $offre->poste }} </td>
                                    <td>{{ $offre->salaire }} </td>
                                    <td>{{ $offre->deadline }} </td>
                                    <td>{{ $offre->description }} </td>
                                    <td>
                                        @foreach ($offre->Techno()->get() as $techno)
                                            {{ $techno->titre }} ,
                                        @endforeach
                                    </td>
                                    <td> {{ $offre->Users->count() }}

                                        @if ($offre->Users->count() > 0)
                                            <a type="button" class="btn btn-warning"
                                                href="{{ route('offre.candidats', $offre->id) }}"><i
                                                    class="fa fa-eye"></i>
                                            </a>
                                        @endif

                                    </td>


                                    <td>
                                        <div class="btn-group" style="display: block;">

                                            <a type="button" class="btn btn-success"
                                                style=" margin: 2px;border-radius: 12px;background-color: #28A687;border-color: #28A687;"
                                                href="{{ route('offre.show', $offre->id) }}"> <i class="fa fa-eye">
                                                    Détails</i></a>
                                            <br>
                                            <a type="button" class="btn btn-info" style=" margin: 2px;border-radius: 12px;"
                                                href="{{ route('offre.edit', $offre->id) }}"><i class="fa fa-edit">
                                                    Modifier</i> </a>

                                            <br>
                                            <form action="{{ Route('offre.destroy', $offre->id) }}"
                                                style=" margin: 2px;border-radius: 12px;" class="btn-group" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }} <button type="submit"
                                                    style=" margin: 2px;border-radius: 12px;" class="btn  btn-danger"><i
                                                        class="fa fa-trash">Supprimer</i></button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script type="text/javascript">
        $("#example2").DataTable({

            "language": {
                url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"
            },
            "oLanguage": {

                "sSearch": "<i>Recherche: </i>",
                "sInfo": "Vous avez un total de  _TOTAL_ entrées à afficher (_START_ à _END_)",
                "sInfoEmpty": "Vous avez 0 entries",
                "oPaginate": {
                    "sFirst": "Première page", // This is the link to the first page
                    "sPrevious": "Précédent", // This is the link to the previous page
                    "sNext": "Suivant", // This is the link to the next page
                    "sLast": "Dernière page" // This is the link to the last page
                },

            },

            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    </script>

@endsection
