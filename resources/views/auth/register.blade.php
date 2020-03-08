@extends('frontend')

@section('frontend')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register For Patient') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patient.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Patient Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="inputProfi" class="col-md-4 col-form-label text-md-right"> Patient's Profile </label>
                            <div class="col-md-6">
                              <input type="file"  id="profi" name="profi">
                              @if ($errors->any()) 
                              <span class="help-block text-danger is-invalid">{{ $errors->first('profi') }}</span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputAddress" class="col-md-4 col-form-label text-md-right">Address</label>
                        <div class="col-md-6">
                          <textarea type="text" class="form-control" id="inputAddress" name="address"></textarea>
                          @if ($errors->any()) 
                          <span class="help-block text-danger is-invalid">{{ $errors->first('address') }}</span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPhone" class="col-md-4 col-form-label text-md-right">Phone</label>
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="inputPhone" name="phone">
                      @if ($errors->any()) 
                      <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('phone') }}</span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" id="inputEmail" name="email">
                  @if ($errors->any()) 
                  <span class="help-block text-danger is-invalid" role="alert">{{ $errors->first('email') }}</span>
                  @endif
              </div>
          </div>

          <div class="form-group row">

                <label for="inputDob" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                <div class="col-md-6">
              <input type="date" class="form-control" id="inputDob" name="Dob" placeholder="dd/mm/yy">
          </div>
      </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Gender</label>    
            <div class="col-md-6 d-inline-flex">
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
    </div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
