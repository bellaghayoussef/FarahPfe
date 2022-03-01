@extends('layouts.app')
@section('title', 'etudiant')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 1.5rem;"><i>Liste des étudiants </i></h2>
                    <div class="col-4 float-left ">
                        <select class="form-control  " id="techno">
                            <option> Choisir Compétences demander </option>
                            @foreach ($technos as $techno)
                                <option value="{{ $techno->id }}">{{ $techno->titre }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4 float-left ">
                        <select class="form-control  " id="certif">
                            <option> Choisir certif chercher </option>
                            @foreach ($certifs as $certif)
                                <option value="{{ $certif->id }}">{{ $certif->titre }} </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row" id="body">
                        @foreach ($users as $user)
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;height: 466px;    padding-top: 10px;">
                                    <img class="img-circle img-bordered-sm"
                                        style="    margin: auto;width: 170px;height: 170px;"
                                        src="{{ asset('/' . $user->avatar) }}" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 2rem;"> <a href="{{route('etudiantshow',$user->id)}}"> {{ $user->nom }}
                                          {{ $user->prenom }}</a> </h5>
                                        <p class="card-text" style="
    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 143px;
">
                                            {{ $user->email }}<br>
                                            {{ $user->phone }}<br>
                                            CV :<a href="{{ asset('/cv/' . $user->cv) }} ">{{ $user->cv }}</a><br>
                                            {{ $user->niveau }}<br>
                                            {{ $user->competence }}
                                        </p>


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
        $(document).ready(function() {

            $('#techno').change(function() {
                $.get("{{ url('etudiant_techno') }}", {
                        option: $(this).val()
                    },
                    function(data) {

                        $('#body').empty();
                        $.each(data, function(key, element) {
                            html =
                                "<div class='col-sm-4'><div class='card' style='width: 18rem;height: 622px;padding-top: 10px;'><img class='img-circle img-bordered-sm' style='margin: auto;width: 170px;height: 170px;'src='{{ asset('/') }}" +
                                element.avatar +
                                "' alt='user image'><div class='card-body'><h5 class='card-title' style='font-size: 2rem;'><a href='{{route('etudiantshow',$user->id)}}''>" +
                                element.nom + " " + element.prenom +
                                "</a></h5><p class='card-text'' style='    display: -webkit-box;-webkit-line-clamp: 6;-webkit-box-orient: vertical;max-width: 200px;overflow: hidden;text-overflow: ellipsis;height: 143px;'>" + element
                                .email + "<br>   " +
                                element.phone + "<br>   " + element.niveau +
                                "<br>  CV :<a  href='{{ asset('/cv/') }}/" + element.cv +
                                "'>" + element.cv + "</a>  " + element
                                .competence + ".</p> <button onclick='favori(" + element.id +
                                ")'style='background: transparent;border: transparent;'id='favoribtn" +
                                element.id + "'>";
                            if (element.isfavret == true) {
                                html = html +
                                    "<i class='fa fa-heart' style='color: red;font-size: x-large;'></i> </button>  </div> </div></div>";
                            } else {
                                html = html +
                                    "<i class='far fa-heart' style='color: darkgrey;font-size: x-large;'></i> </button>  </div> </div></div>";
                            }


                            $('#body').append(html);
                        });
                    });


            });




            $('#certif').change(function() {
                $.get("{{ url('etudiant_certif') }}", {
                        option: $(this).val()
                    },
                    function(data) {

                        $('#body').empty();
                        $.each(data, function(key, element) {
                            html =
                                "<div class='col-sm-4'><div class='card' style='width: 18rem;height: 622px;padding-top: 10px;'><img class='img-circle img-bordered-sm' style='margin: auto;width: 170px;height: 170px;'src='{{ asset('/') }}" +
                                element.avatar +
                                "' alt='user image'><div class='card-body'><h5 class='card-title' style='font-size: 2rem;'><a href='{{route('etudiantshow',$user->id)}}''>" +
                                element.nom + " " + element.prenom +
                                "</a></h5><p class='card-text' style='    display: -webkit-box;-webkit-line-clamp: 6;-webkit-box-orient: vertical;max-width: 200px;overflow: hidden;text-overflow: ellipsis;height: 143px;'>" + element
                                .email + "<br>   " +
                                element.phone + "<br>   " + element.niveau +
                                "<br>  CV :<a  href='{{ asset('/cv/') }}/" + element.cv +
                                "'>" + element.cv + "</a>  " + element
                                .competence + ".</p> <button onclick='favori(" + element.id +
                                ")'style='background: transparent;border: transparent;'id='favoribtn" +
                                element.id + "'>";
                            if (element.isfavret == true) {
                                html = html +
                                    "<i class='fa fa-heart' style='color: red;font-size: x-large;'></i> </button>  </div> </div></div>";
                            } else {
                                html = html +
                                    "<i class='far fa-heart' style='color: darkgrey;font-size: x-large;'></i> </button>  </div> </div></div>";
                            }


                            $('#body').append(html);
                        });
                    });


            });

        });

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
