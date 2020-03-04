@extends('backend')

@section('content')
<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary">Patient Detail List</h6>

		</div>
		<div class="col-2">
			<a href="{{route('patient.index')}}" class="btn btn-outline-danger btn-block"><i class="fas fa-minus"></i> Back </a>
		</div>

	</div>
</div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Qualify Photo</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$patients->user->name}}</td>
      <td>{{$patients->user->email}}</td>
      <td><img src="{{asset($patients->profile)}}" class="img-fluid w-25"></td>
      <td>{{$patients->gender}}</td>
      <td>{{$patients->user->email}}</td>
    </tr>
  </tbody>
</table>
@endsection