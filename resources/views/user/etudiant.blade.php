@extends('layouts.app')
@section('title', 'etudiant')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Etudiant CRUD </h3>
                <a type="button" class="btn btn-success float-right" href="{{ route('createetudiant') }}"> <i class="fa fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>nom</th>
                          <th>prénom</th>
                          <th>Avatar</th>
                          <th>email</th>
                          <th>télephone</th>
                 
                          <th>matricule</th>
                     
                          <th>niveau</th>
                          <th>Action</th>
                     
                    
                        </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                      <tr>
                          <td>{{ $user->nom}} </td>
                          <td>{{ $user->prenom}} </td>
                          <td> <img id="blah" src="{{asset('/'.$user->avatar)}}" alt=" " style="height:70px;width:70px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;"/> </td>

                          <td>{{ $user->email}} </td>
                          <td>{{ $user->phone}} </td>
                          <td>{{ $user->matricule}} </td>
                          <td>{{ $user->niveau}} </td>
                          <td>  <div class="btn-group">
            <a type="button" class="btn btn-info" href="{{ route('editetudiant',$user->id) }}"><i class="fa fa-edit"></i> </a>
            <a type="button" class="btn btn-success" href="{{ route('show_etudiant',$user->id) }}"><i class="fa fa-eye"></i> </a>

          
              <form action="{{ Route('destroyetudiant',$user->id) }}" class="btn-group"  method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}   
                       <button type="submit" class="btn  btn-danger" ><i class="fa fa-trash"></i></button></form> 
          </div></td>
                      
                          
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