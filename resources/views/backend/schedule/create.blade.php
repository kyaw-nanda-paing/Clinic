@extends('backend')

@section('content')

<form class="col-lg-11" method="POST" action="{{route('schedule.store')}}">
	@csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleInputDegree"> Date</label>
			<input type="date" name="date" class="form-control" id="exampleInputSchedule" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="exampleInputPhoto"> Time </label>
			<input type="time" name="time" class="file-control" id="exampleInputPhoto">
		</div>
			<div class="form-group">
			<label for="exampleInputPhoto">Doctor_id</label>
			<input type="number" name="number" class="file-control" id="exampleInputPhoto">
		</div>
		<input type="submit" class="btn btn-primary" name="">
	</div>
</form>

@endsection