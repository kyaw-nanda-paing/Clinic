@extends('backend')

@section('content')

<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary"> Doctors List</h6>

		</div>
		<div class="col-2">
			<a href="{{route('doctor.create')}}" class="btn btn-outline-success btn-block"><i class="fas fa-plus"></i>Add New</a>
		</div>

	</div>
</div>

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Address</th>
			<th scope="col">Phone</th>
			<th scope="col">Degree</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($doctors as $row)
		<tr>
			<td>{{$i}}</td>
			<td>{{$row->id}}</td>
			<td>{{$row->user->name}}</td>
			<td>{{$row->address}}</td>
			<td>{{$row->phone}}</td>
			<td>{{$row->degree->name}}</td>
			<td><a href="{{route('doctor.show', $row->id)}}" class="btn btn-success">Detail</a>
				<a href="{{route('doctor.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('doctor.destroy',$row->id)}}" class="d-inline-flex"onsubmit="return confirm('Are You Sure To Want To Delete?')">
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