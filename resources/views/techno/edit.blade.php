@extends('layouts.app')
@section('title', 'Techno')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Techno Edit </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form action="{{ route('techno.update',$techno->id) }}" enctype="multipart/form-data" class="form-horizontal" method="POST" >
  {{ csrf_field() }}
  <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>

                            <div class="col-md-6">
                                <input id="titre" type="text"  value="{{ $techno->titre}}" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                            </div>
                        </div>


<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Domain</label>

                            <div class="col-md-6">
                               <select class="form-control" id="domain_id" name="domain_id">
           <option value="" style="display: none;" {{ old('domain_id', optional($techno)->domain_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select domain</option>
          @foreach ($domains as $key => $domain)
          <option value="{{ $domain->id }}"  {{ old('domain_id', optional($techno)->domain_id) == $domain->id ? 'selected' : '' }}>
            {{ $domain->title }}
          </option>
      @endforeach
      
        </select>

                               
                            </div>
                        </div>



                        <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
                <button type="submit" class="btn btn-success float-right">Edit</button>
              </div>
  </form>

</div>
</div>
</div>
</div>

@endsection