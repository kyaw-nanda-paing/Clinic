@extends('backend')

@section('content')

<form class="col-lg-11" method="POST" action="{{route('schedule.store')}}">
	@csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleInputDate"> Choose Day </label>
			<select name="day" id="exampleInputDate" class="form-control">
				<option value="Sunday">Sunday</option>
				<option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
				<option value="Wednesday">Wednesday</option>
				<option value="Thursday">Thursday</option>
				<option value="Friday">Friday</option>
				<option value="Saturday">Saturday</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputTime1"> Start - Time </label>
			<input type="time" name="start_time" class="form-control" id="exampleInputTime1">
		</div>
		<div class="form-group">
			<label for="exampleInputTime2"> End - Time </label>
			<input type="time" name="end_time" class="form-control" id="exampleInputTime2">
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