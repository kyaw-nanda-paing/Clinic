@extends('backend')

@section('content')

<form class="col-lg-11" method="POST" action="{{route('degree.store')}}" enctype="multipart/form-data">
	@csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleInputDegree"> Degree Name </label>
			<input type="text" name="name" class="form-control" id="exampleInputDegree" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="exampleInputPhoto"> Qualify Photo </label>
			<input type="file" name="photo" class="file-control" id="exampleInputPhoto">
		</div>
		<input type="submit" class="btn btn-primary" name="">
	</div>
</form>

@endsection