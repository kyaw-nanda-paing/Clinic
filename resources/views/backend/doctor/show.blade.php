@extends('backend')

@section('content')
<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary">List</h6>

		</div>
		<div class="col-2">
			<a href="{{route('doctor.index')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i> Back </a>
		</div>

	</div>
</div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Degree</th>
      <th scope="col">Qualify Photo</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$doctors->user->name}}</td>
      <td>{{$doctors->degree->name}}</td>
      <td><img src="{{asset($doctors->profile)}}" class="img-fluid w-25"></td>
      <td>{{$doctors->gender}}</td>
      <td>{{$doctors->user->email}}</td>
    </tr>
  </tbody>
</table>
@endsection