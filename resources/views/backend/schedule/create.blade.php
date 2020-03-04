@extends('backend')

@section('content')

<form class="col-lg-11" method="POST" action="{{route('schedule.store')}}">
	@csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleInputDate"> Date</label>
			<input type="date" name="date" class="form-control" id="exampleInputDate" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="exampleInputTime"> Time </label>
			<input type="time" name="time" class="file-control" id="exampleInputTime">
		</div>
		<div class="form-group">
			<label class="col-sm-2">Choose Doctor</label>
			<select name="doctor" class="form-control">
				@foreach($doctors as $row)
				<option value="{{$row->id}}">{{$row->user->name}}</option>
				@endforeach
			</select>
		</div>
		<input type="submit" class="btn btn-primary btn-block" name="" value="Duty Record">
	</div>
</form>

@endsection