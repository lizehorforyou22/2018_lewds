


@section('content1')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@extends('temp_0.master')


	<link rel="stylesheet" href="select2/css/select2.min.css">
	<link rel="stylesheet" href="select2/css/select2-bootstrap.css">
	<link rel="stylesheet" href="select2/css/gh-pages.css">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alternative Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" rows="7"></textarea>
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <div class="form-group">
  <label for="exampleInputEmail1">Cover Photo</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04">
    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
  </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Genre</label>
    <select class="form-control select2-multiple" id="exampleFormControlSelect1" name = "selectName[ ]"  multiple="multiple">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Tags</label>
    <select class="form-control select2-multiple" id="exampleFormControlSelect1" name = "selectName[ ]"  multiple="multiple">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>


<br><br><br><br>




<script src="select2/js/jquery.min.js"></script>
<script src="select2/js/select2.full.js"></script>
<script>
	function sendSelectedBranches(){
		console.log($(".select2-multiple").val());
	}

</script>

<script>
	$( ".select2-multiple" ).select2( {
		theme: "bootstrap",
		placeholder: "Select Branch",
		maximumSelectionSize: 6,
		containerCssClass: ':all:'
	} );

	$("#checkbox").click(function(){
    if($("#checkbox").is(':checked') ){
        $(".select2-multiple > option").prop("selected","selected");
        $(".select2-multiple").trigger("change");
    }else{
        $(".select2-multiple > option").removeAttr("selected");
         $(".select2-multiple").trigger("change");
     }
});
 
</script>


@endsection
@extends('layouts.app')