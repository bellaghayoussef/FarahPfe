@extends('layouts.app')
@section('title', 'etudiant')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 1.5rem;"><i>Liste des étudiants favori </i></h2>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row" id="body">
                        @foreach ($users as $user)
                            <div class="col-sm-4" id="etudiant{{ $user->id }}">
                                <div class="card" style="width: 18rem;height: 500px;    padding-top: 10px;">
                                    <img class="img-circle img-bordered-sm"
                                        style="    margin: auto;width: 170px;height: 170px;"
                                        src="{{ asset('/' . $user->avatar) }}" alt="user image">
                                    <div class="card-body">
                                        <h2 class="card-title" style="font-size: 2rem;"> {{ $user->nom }}
                                            {{ $user->prenom }}</h2>
                                        <p class="card-text">
                                            {{ $user->email }}<br>
                                            {{ $user->phone }}<br>
                                            {{ $user->niveau }}<br>
                                            {{ $user->competence }}.</p>

                                        <button onclick="favori({{ $user->id }})"
                                            style="background: transparent;border: transparent;"
                                            id="favoribtn{{ $user->id }}">
                                            @if ($user->isfavret == true)
                                                <i class="fa fa-heart" style="color: red;font-size: x-large;"></i>
                                            @else

                                                <i class="far fa-heart" style="color: darkgrey;font-size: x-large;"></i>

                                            @endif

                                        </button>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script>
        function favori(id) {
            console.log(id);
            $.get("{{ url('favori') }}", {
                    id: id
                },
                function(data) {
                    console.log(data)
                    $('#etudiant' + id).empty();


                })
        }

    </script>

@endsection
