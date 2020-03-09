@extends('frontend')

@section('frontend')

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Note</th>
			<th scope="col">Patient</th>
			
			<th scope="col">Schedule</th>
			<th scope="col">Time</th>
			<th scope="col">Token</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($doctor->schedule as $row)
			@foreach($row->booking as $row1)
		<tr>
			<td>{{$i++}}</td>
			
			<td>{{$row1->note}}</td>
			
			<td>{{$row1->patient->user->name}}</td>
			
			<td>{{$row->day}}</td>

			<td>{{$row->start_time}} / {{$row->end_time}}</td>

			<td>{{$row1->token_no}}</td>


			<td>
				<form method="post" action="" class="d-inline-flex"onsubmit="return confirm('Are You Sure To Want To Delete?')">
					@csrf
					@method('DELETE')
					<button type="submit"class="btn btn-danger">Delete</button>
				</form>
			</td>

		</tr>
		@endforeach
			@endforeach
		
	</tbody>
</table>

@endsection