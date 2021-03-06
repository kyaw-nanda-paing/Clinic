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
      <select name="day" id="exampleInputDate" class="form-control">
        <option>{{($schedules->day)}}</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputTime" class="col-sm-2 col-form-label">Start - Time</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="inputTime" name="start_time" value="{{($schedules->start_time)}}">
    </div>
  </div>
  <div class="form-group row">
      <label for="exampleInputTime2" class="col-sm-2 col-form-label"> End - Time </label>
      <div class="col-sm-10">
      <input type="time" name="end_time" class="form-control" id="exampleInputTime2" value="{{($schedules->end_time)}}">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputTime" class="col-sm-2 col-form-label">Doctor Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNumber" name="doctor" value="{{($schedules->doctor_id)}}">
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