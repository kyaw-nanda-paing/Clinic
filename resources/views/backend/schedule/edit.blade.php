@extends('backend')

@section('content')
<div class="container-fluid">
<h2>Show With Form/ old value</h2>

	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-10">
               <h6 class="m-0 font-weight-bold text-primary">List</h6>
                
                </div>
                  <div class="col-2">
      <a href="{{route('schedule.index')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i> Back </a>
    </div>

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="col-lg-11" method="post" action="{{route('schedule.update',$schedules->id)}}">
	@csrf
	@method('PUT')


  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputDate" name="date" value="{{($schedules->date)}}">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="inputTime" name="time" value="{{($schedules->time)}}">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputTime" class="col-sm-2 col-form-label">Doctor Id</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputNumber" name="number" value="{{($schedules->Number)}}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
				</div>
	</div>
</div>

@endsection