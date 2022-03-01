@extends('layouts.app')
@section('title', 'Offre')

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/github.css">
    <link rel="stylesheet" href="../assets/app.css">
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42755476-1', 'bootstrap-tagsinput.github.io');
    ga('send', 'pageview');
    </script>

<style type="text/css">
.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: white;
}
.label-info {
    background-color: #5bc0de;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
   /* @import url('https://kodhus.com/kodhus-ui/kodhus-0.1.0.min.css');
body {
  background: #eee;
}
.container {

  margin: 10px auto;
}
.tag-container {
  border: 2px solid #ccc;
  border-radius: 3px;
  background: #fff;
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
  padding: 6px;
  overflow-x: scroll;
}
.tag-container .tag {
  height: 30px;
  margin: 5px;
  padding: 5px 6px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: #eee;
  display: flex;
  align-items: center;
  color: #333;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 1px 1px #fff;
  cursor: default;
}
.tag i {
  font-size: 16px;
  color: #666;
  margin-left: 5px;
}
.tag-container input {
  padding: 5px;
  font-size: 16px;
  border: 0;
  outline: none;
  font-family: 'Rubik';
  color: #333;
  flex: 1;
}
*/
.icon-github {
    background: no-repeat url('../img/github-16px.png');
    width: 16px;
    height: 16px;
}

.bootstrap-tagsinput {
    width: 100%;
}

.accordion {
    margin-bottom:-3px;
}

.accordion-group {
    border: none;
}

.twitter-typeahead .tt-query,
.twitter-typeahead .tt-hint {
    margin-bottom: 0;
}

.twitter-typeahead .tt-hint
{
    display: none;
}

.tt-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    list-style: none;
    font-size: 14px;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    background-clip: padding-box;
    cursor: pointer;
}

.tt-suggestion {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.428571429;
    color: #333333;
    white-space: nowrap;
}

.tt-suggestion:hover,
.tt-suggestion:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #428bca;
}


</style>
@endsection
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Offre Edit </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form action="{{ route('offre.update',$offre->id) }}" enctype="multipart/form-data" class="form-horizontal" method="POST" >
  {{ csrf_field() }}
 
                            <div class="form-group row">
                          
                            <label for="name" class="col-md-4 col-form-label text-md-right">Poste</label>
                           <div class="col-md-6">
                                <input id="poste" type="text"  value="{{ $offre->poste}}" class="form-control @error('poste') is-invalid @enderror" name="poste" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                            </div>
                            </div>
                            <div class="form-group row">
                            
                            <label for="name" class="col-md-4 col-form-label text-md-right">Salaire</label>
                            <div class="col-md-6">
                                <input id="salaire" type="number" min="1"  value="{{ $offre->salaire}}" class="form-control @error('salaire') is-invalid @enderror" name="salaire"  required autocomplete="name" autofocus>

                               
                            </div>
                            </div>
                            <div class="form-group row">
                             
                            <label for="name" class="col-md-4 col-form-label text-md-right">Deadline</label>

                            <div class="col-md-6">
                                <input id="deadline" type="date"  value="{{ $offre->deadline}}" class="form-control @error('deadline') is-invalid @enderror" name="deadline"  required autocomplete="name" autofocus>

                               
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text"  value="{{ $offre->description}}" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="name" autofocus>

                               
                            </div>
                            </div>
                            <div class="form-group row">
                                                       <label for="name" class="col-md-4 col-form-label text-md-right">Compétences</label>
                                                     
                            <div class="col-md-6">
                       
 <input type="text"    name="competence"   data-role="tagsinput"  value="  @foreach($offre->Techno()->get() as $techno)
                     {{ $techno->titre }} , 
                    @endforeach"/>
                               
                            </div>
                            </div>
     <div class="form-group row" >
                    <label for="inputName" class="col-md-4 col-form-label text-md-right">Test Technique</label>
                    <div class="col-md-6">
                        <input type="file" value="{{$offre->test}}" class="form-control" id="pdf" name="pdf" value="">
                    </div>
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../../dist/bootstrap-tagsinput.min.js"></script>

        <script src="../assets/app.js"></script>
<script type="text/javascript">
  var big_image;

 $(function() {
  $('input, select').on('change', function(event) {
    var $element = $(event.target),
      $container = $element.closest('.example');

    if (!$element.data('tagsinput'))
      return;

    var val = $element.val();
    if (val === null)
      val = "null";
    $('code', $('pre.val', $container)).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
    $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));
  }).trigger('change');
});


$(function() {
  $('input, select').on('change', function(event) {
    var $element = $(event.target),
      $container = $element.closest('.example');

    if (!$element.data('tagsinput'))
      return;

    var val = $element.val();
    if (val === null)
      val = "null";
    $('code', $('pre.val', $container)).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
    $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));
  }).trigger('change');
});



$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }


});



</script>
@endsection