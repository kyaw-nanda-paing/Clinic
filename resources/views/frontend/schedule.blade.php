@extends('frontend')

@section('frontend')

<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 col-lg-12 mt-5 mt-lg-0">
            <div class="appointment-box">
                <h2 class="d-flex align-items-center">Make an Appointment</h2>

                <form action="{{route('booking.store')}}" method="POST" class="d-flex flex-wrap justify-content-between">
                    @csrf
                    <div class="form-group row col-lg-6">
                        <label for="select_doctor" class="col-sm-2 col-form-label">Choose Doctor</label>
                        <select id="select_doctor" class="form-control" name="doctor">
                            @foreach($doctors as $row)
                            <option value="{{$row->id}}" data-id="{{$row->id}}" >{{$row->user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="schedule_day" class="form-group col-lg-6">

                    </div>
                    <div class="col-lg-12">
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
                        <label for="inputNote" class="col-sm-2 col-form-label">Note</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputNote" name="note" placeholder="Tell me your description"></textarea>
                          @if ($errors->any()) 
                          <span class="help-block text-danger is-invalid">{{ $errors->first('note') }}</span>
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
              <label for="inputDob">Age/Dat of Birth</label>
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


<button type="submit" class="button gradient-bg" id="doc_id" value="Boom Appoitnment">Booking</button>
</div>

</form>
</div>
</div>
</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#select_doctor').click(function(){
          var id=$("#select_doctor").val();

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          
          $.get('/getSchedule/'+id,function(response){
            var html="";
            $.each(response,function (i,v) {
                var id=v.id;
                var day=v.day;
                var start_time=v.start_time;
                var end_time=v.end_time;

                html +=` <input type="text" name="day" value="${day}">`;

                html +=`<input class="form-check-input mx-4" type="checkbox" name="time[]" id="inlineCheckbox1" value="${id}">
                <label class="form-check-label mx-5" for="gridCheck" value="${start_time}">${start_time}/${end_time}</label>`;
                


                
            });
            // html+="</select>";
            $("#schedule_day").html(html);

        });


      });
    });
</script>    
@endsection