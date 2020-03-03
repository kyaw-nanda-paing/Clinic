@extends('backend')

@section('content')
<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary">Detail List</h6>

		</div>
		<div class="col-2">
			<a href="{{route('degree.index')}}" class="btn btn-outline-warning btn-block"><i class="fas fa-minus"></i> Back </a>
		</div>

	</div>
</div>
<div class="container-fluid">
	<h2>Show about degrees</h2>

	<div class="row">
		<div class="col-md-12">
			<h4> Name : {{$degrees->name}}</h4>
			Photo : <img src="{{asset($degrees->photo)}}" class="img-fluid w-25">
     
		</div>
	</div>
</div>
@endsection