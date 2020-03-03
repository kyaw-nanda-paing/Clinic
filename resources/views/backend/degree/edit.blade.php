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
          <a href="{{route('degree.index')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i> Back </a>
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

    <form class="col-lg-11" method="post" action="{{route('degree.update',$degrees->id)}}" enctype="multipart/form-data">
     @csrf
     @method('PUT')


     <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" name="name" value="{{($degrees->name)}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputphoto" class="col-sm-2 col-form-label"> Photo </label>

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
            <img src="{{asset($degrees->photo)}}" class="img-fluid w-25">
            <input type="hidden" name="oldphoto" value="{{$degrees->photo}}">

          </div>
          <div class="tab-pane fade" id="new">
            <input type="file" name="photo" class="form-control-file" id="inputphoto">
          </div>
        </div>

      </div>
    </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>


@endsection