@extends('frontend')

@section('frontend')

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Note</th>
			<th scope="col">Your Doctor</th>			
			<th scope="col">Booking Day</th>
			<th scope="col">Time</th>
			<th scope="col">Token</th>
			<th scope="col" colspan="3">Are You Sure?</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($patient->booking as $row)
		
			
				<tr>
					<td>{{$i++}}</td>
					
					<td>{{$row->note}}</td>
					
					<td>{{$row->schedule->doctor->user->name}}</td>
					
					<td>{{$row->schedule->day}}</td>

					<td>{{$row->schedule->start_time}} / {{$row->schedule->end_time}}</td>

					<td>{{$row->token_no}}</td>


					<td><a href="" class="btn btn-success text-dark">I'm Book</a>
						<form method="post" action="{{route('booking.destroy',$row->id)}}" class="d-inline-flex"onsubmit="return confirm('Are You Sure To Want To Delete?')">
							@csrf
							@method('DELETE')
							<button type="submit"class="btn btn-danger">No</button>
						</form>
					</td>

				</tr>
			
		@endforeach
		
		
	</tbody>
</table>

@endsection