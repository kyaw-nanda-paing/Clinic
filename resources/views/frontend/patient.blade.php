@extends('frontend')

@section('frontend')

<div class="medical-team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2> Welcome </h2>
			</div>
			
			@foreach($patients as $row)
			<div class="col-md-6 col-lg-4">
				<div class="medical-team-wrap mx-4">
					<a href=""></a><img src="{{$row->profile}}" onmouseover="bigImg(this)" onmouseout="normalImg(this)" alt="" width="250">

					<h4>{{$row->user->name}}</h4>
					<h5>{{$row->phone}}</h5>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		
	</div>
</div>


<script type="text/javascript">
	function bigImg(x) 
	{
		x.style.width="300px";
	}
	function normalImg(x) 
	{
		x.style.width="250px";
	}
</script>
@endsection