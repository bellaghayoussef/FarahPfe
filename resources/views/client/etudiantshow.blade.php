@extends('layouts.app')
@section('title', 'etudiant')
@section('content')
    <div class="row">
        <div class="col-12">
           <div class="card" style="padding-top:10px;" >
                                    <img class="img-circle img-bordered-sm"
                                        style="    margin: auto;width: 170px;height: 170px;"
                                        src="{{ asset('/' . $user->avatar) }}" alt="user image">
                                    <div class="card-body" style="    margin: auto;">
                                        <h5 class="card-title" style="font-size: 2rem;"> {{ $user->nom }}
                                            {{ $user->prenom }}</h5>
                                        <p class="card-text" style="    -webkit-box-orient: vertical;
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: center;" >
                                           <span style="    font-size: 26px;">Email : </span> {{ $user->email }}<br>
                                           <span style="    font-size: 26px;">Téléphone : </span>  {{ $user->phone }}<br>
                                           <span style="    font-size: 26px;">CV : </span> <a href="{{ asset('/cv/' . $user->cv) }} ">{{ $user->cv }}</a><br>
                                         <span style="    font-size: 26px;">Niveau : </span>   {{ $user->niveau }}<br>
                                         <span style="    font-size: 26px;">Compétences : </span>  <br> {{ $user->competence }}
                                           <br>
                                          <span style="    font-size: 26px;">Certifications : </span>    <br> {{ $user->Certifications }}
                                        </p>


                                        <button onclick="favori({{ $user->id }})"
                                            style="background: transparent;border: transparent;margin-left:74px"
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
                    $('#favoribtn' + id).empty();
                    if (data == "save") {
                        $('#favoribtn' + id).append(
                            " <i class='fa fa-heart' style='color: red;font-size: x-large;'></i>");
                    }
                    if (data == "delete") {
                        $('#favoribtn' + id).append(
                            " <i class='far fa-heart' style='color: darkgrey;font-size: x-large;'></i>");
                    }


                })
        }

    </script>

@endsection
