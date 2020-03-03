@extends('backend')

@section('content')

<form class="col-lg-11" method="post" action="{{route('doctor.update',$doctors->id)}}" enctype="multipart/form-data">@csrf
  @method('PUT')


  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" value="{{($doctors->name)}}">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('name') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputProfi" class="col-sm-2 col-form-label">Profi</label>

    <div class="col-sm-10">
      <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" data-target="#old"href="#old">Old Photo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" data-target="#new"href="#new">New Photo</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane fade show active" id="old">
    <img src="{{asset($doctors->profi)}}" class="img-fluid w-25">
    <input type="hidden" name="oldprofi" value="{{$doctors->profi}}">
    
  </div>
  <div class="tab-pane fade" id="new">
    <input type="file" name="newprofi" class="form-control-file" id="inputProfi">
  </div>
</div>
 
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputAddress" name="address">{{$doctors->address}}</textarea>
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid">{{ $errors->first('address') }}</span>
                    @endif
    </div>

    <div class="form-group row">
    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPhone" name="phone" value="{{$doctors->phone}}">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('phone') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email" value="{{$doctors->email}}">
      @if ($errors->any()) 
                    <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('email') }}</span>
                    @endif
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputDob">Date Of Birth</label>
      <input type="date" class="form-control" id="inputDob" name="Dob" placeholder="dd/mm/yy" value="{{$doctors->Dob}}">
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
  
  

  <div class="form-group row">
    <label class="col-sm-2">Choose degree</label>
    <select name="degree" class="form-control">
      @foreach($degree as $row)
      <option value="{{$row->id}}" 
        @if($doctors->degree_id == $row->id){{'selected'}}@endif>{{$row->name}}
      </option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary"> Save </button>
</form>

@endsection