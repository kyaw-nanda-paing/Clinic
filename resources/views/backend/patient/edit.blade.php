@extends('backend')

@section('content')

<div class="container">

  <h2> Patient Edit Form</h2>

  <div class="row">
    <div class="col-md-12">
     <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row">
          <div class="col-10">
           <h6 class="m-0 font-weight-bold text-primary"> Patient Detail </h6>

         </div>
         <div class="col-2">
          <a href="{{route('patient.index')}}" class="btn btn-outline-warning btn-block"><i class="fas fa-minus"></i> Back </a>
        </div>

      </div>
    </div>
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
  </div>
</div>
@endif

<form class="col-lg-11" method="post" action="{{route('patient.update',$patients->id)}}" enctype="multipart/form-data">@csrf
  @method('PUT')


  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" value="{{($patients->user->name)}}">
      @if ($errors->any()) 
      <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('name') }}</span>
      @endif
    </div>
  </div>

  <div class="form-group row">
      <label for="inputprofi" class="col-sm-2 col-form-label"> Profi </label>

      <div class="col-sm-10">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" data-target="#old"href="#old">Old Profi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" data-target="#new"href="#new">New Profi</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="old">
            <img src="{{asset($patients->profile)}}" class="img-fluid w-25">
            <input type="hidden" name="oldprofi" value="{{$patients->profi}}">

          </div>
          <div class="tab-pane fade" id="new">
            <input type="file" name="profi" class="form-control-file" id="inputprofi">
          </div>
        </div>

      </div>
    </div>

  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputAddress" name="address">{{$patients->address}}</textarea>
      @if ($errors->any()) 
      <span class="help-block text-danger is-invalid">{{ $errors->first('address') }}</span>
      @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPhone" name="phone" value="{{$patients->phone}}">
      @if ($errors->any()) 
      <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('phone') }}</span>
      @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email" value="{{$patients->user->email}}">
      @if ($errors->any()) 
      <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('email') }}</span>
      @endif
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputDob">Date Of Birth</label>
      <input type="text" class="form-control" id="inputDob" name="Dob" placeholder="dd/mm/yy" value="{{$patients->dob}}">
    </div>

    <fieldset class="form-group">
      <label>Gender</label>    
      <div class="col-sm-10 d-inline-flex">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male"  {{ ($patients->gender=="male")? "checked" : "" }} >
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios2" value="female" {{ ($patients->gender=="female")? "checked" : "" }} >
          <label class="form-check-label " for="gridRadios2">
            Female
          </label>
        </div>
      </div>
    </fieldset>
  </div>
  <button type="submit" class="btn btn-primary"> Update </button>
</form>
</div>

@endsection