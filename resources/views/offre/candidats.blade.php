@extends('layouts.app')
@section('title', 'etudiant')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Etudiants Postulés </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                        
                          <th>nom</th>
                          <th>prénom</th>
                          <th>email</th>
                          <th>télephone</th>
                 
                          <th>matricule</th>
                     
                          <th>niveau</th>
                          <th>Cv</th>
                          <th>Résultat Test Technique</th>
                     
                          
                        </tr>
                  </thead>
                  <tbody>
                      @foreach($offre->Users()->withPivot('cv')->get() as $user)
                      <tr>
                          <td>{{ $user->nom}} </td>
                          <td>{{ $user->prenom}} </td>
                          <td>{{ $user->email}} </td>
                          <td>{{ $user->phone}} </td>
                         
                          <td>{{ $user->matricule}} </td>
                        
                        
                          <td>{{ $user->niveau}} </td>
                          <td><a href="{{ asset('/pdf/'.$user->pivot->cv)}} ">{{ $user->pivot->cv}}</a>
                            <td><a href="{{ asset($user->pivot->test)}} ">{{ $user->pivot->test}}</a>
                            
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


</script>

@endsection