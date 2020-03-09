@extends('backend')

@section('content')

<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary"> Booking List</h6>

		</div>

	</div>
</div>

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Note</th>
			<th scope="col">Patient</th>
			<th scope="col">Doctor</th>
			<th scope="col">Schedule</th>
			<th scope="col">Time</th>
			<th scope="col">Token</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($bookings as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->note}}</td>
			<td>{{$row->patient_id}}</td>
			<td>{{$row->schedule->doctor->user->name}}</td>
			<td>{{$row->schedule->day}}</td>
			<td>{{$row->schedule->start_time}}/{{$row->schedule->end_time}}</td>
			<td>{{$row->token_no}}</td>
			<td><a href="" class="btn btn-success">Detail</a>
				<a href="" class="btn btn-warning">Edit</a>
				<form method="post" action="" class="d-inline-flex"onsubmit="return confirm('Are You Sure To Want To Delete?')">
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