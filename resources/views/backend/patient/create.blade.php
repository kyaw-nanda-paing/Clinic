@extends('backend')

@section('content')

<div class="container">
  <h2>Patient Register</h2>
<form class="col-lg-11" method="post" action="{{route('patient.store')}}" enctype="multipart/form-data">@csrf


  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('name') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputProfi" class="col-sm-2 col-form-label"> Profi </label>
    <div class="col-sm-10">
      <input type="file"  id="profi" name="profi">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid">{{ $errors->first('profi') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputAddress" name="address"></textarea>
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid">{{ $errors->first('address') }}</span>
                    @endif
    </div>
</div>

    <div class="form-group row">
    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPhone" name="phone">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('phone') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('email') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputDob">Date Of Birth</label>
      <input type="date" class="form-control" id="inputDob" name="Dob" placeholder="dd/mm/yy">
    </div>

    <fieldset class="form-group">
<label>Gender</label>    
  <div class="col-sm-10 d-inline-flex">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios2" value="female">
          <label class="form-check-label " for="gridRadios2">
            Female
          </label>
        </div>
     </div>
   </fieldset>
 </div>
  <input type="submit" class="btn btn-primary" name="" value="Record">
</div>
</form>

@endsection