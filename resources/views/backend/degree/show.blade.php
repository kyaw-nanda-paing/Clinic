@extends('backend')

@section('content')
<div class="card-header py-3">
	<div class="row">
		<div class="col-10">
			<h6 class="m-0 font-weight-bold text-primary">List</h6>

		</div>
		<div class="col-2">
			<a href="{{route('degree.index')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i> Back </a>
		</div>

	</div>
</div>
<div class="container-fluid">
	<h2>Show with your own ui</h2>

	<div class="row">
		<div class="col-md-12">
			Name : <h4>{{$degrees->name}}</h4>
			<br>
			Photo :<img src="{{asset($degrees->photo)}}" class="img-fluid w-25">
     
		</div>
	</div>
</div>
@endsection