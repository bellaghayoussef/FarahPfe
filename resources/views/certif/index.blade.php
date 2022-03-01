@extends('layouts.app')
@section('title', 'Certif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Certif CRUD </h3>
                    <a type="button" class="btn btn-success float-right" href="{{ route('certif.create') }}"> <i
                            class="fa fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Titre</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($certifs as $certif)
                                <tr>
                                    <td>{{ $certif->titre }} </td>

                                    <td>
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-success"
                                                href="{{ route('certif.show', $certif->id) }}"> <i
                                                    class="fa fa-eye"></i></a>
                                            <a type="button" class="btn btn-info"
                                                href="{{ route('certif.edit', $certif->id) }}"><i class="fa fa-edit"></i>
                                            </a>


                                            <form action="{{ Route('certif.destroy', $certif->id) }}" class="btn-group"
                                                method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }} <button type="submit"
                                                    class="btn  btn-danger"><i class="fa fa-trash"></i></button></form>
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
