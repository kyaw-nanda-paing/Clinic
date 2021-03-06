@extends('backend')

@section('content')

<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary">Duty Time</h6>

		</div>
		<div class="col-2">
			<a href="{{route('schedule.create')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i>Add New</a>
		</div>

	</div>
</div>

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>

			<th scope="col">Day</th>
			<th scope="col">Start_Time</th>
			<th scope="col">End_Time</th>
			<th scope="col">Doctor Name</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($schedules as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->day}}</td>
		    <td>{{$row->start_time}}</td>
		    <td>{{$row->end_time}}</td>
		    <td>{{$row->doctor->user->name}}</td>
			<td><a href="{{route('schedule.show', $row->id)}}" class="btn btn-info">Detail</a>
				<a href="{{route('schedule.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('schedule.destroy',$row->id)}}" class="d-inline-flex"onsubmit="return confirm('Are You Sure To Want To Delete?')">
					@csrf
					@method('DELETE')
					<button type="submit"class="btn btn-danger">Delete</button>
				</form>
			</td>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection