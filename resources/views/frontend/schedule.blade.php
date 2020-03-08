@extends('frontend')

@section('frontend')

<div class="container">
  <div class="row">

    @if (session('status1'))
      <div class="alert alert-danger">
        {{ session('status1') }}
      </div>
      @endif

      @if (session('status'))
      <div class="alert alert-danger">
        {{ session('status') }}
      </div>
      @endif

    <div class="col-12 col-md-6 col-lg-12 mt-5 mt-lg-0">
      <div class="appointment-box">
        <h2 class="d-flex align-items-center">Make an Appointment</h2>

        <form action="{{route('booking.store')}}" method="POST" class="d-flex flex-wrap justify-content-between">
          @csrf
          <div class="form-group row col-lg-6">
            <label for="select_doctor" class="col-sm-5 col-form-label">Choose Doctor</label>
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
              <label for="inputNote" class="col-sm-2 col-form-label">Note</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="inputNote" name="note" placeholder="Tell me your description"></textarea>
                @if ($errors->any()) 
                <span class="help-block text-danger is-invalid">{{ $errors->first('note') }}</span>
                @endif
              </div>
            </div>
            <button type="submit" class="button gradient-bg" id="doc_id" value="Boom Appoitnment">Booking</button>
            <input type="hidden" name="pid" id="pid" value="{{$user->patient->id}}">
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

          html +=`<input class="form-check-input mx-4" type="checkbox" name="schedule_id" id="inlineCheckbox1" value="${id}">
          <label class="form-check-label mx-5" for="gridCheck" value="${start_time}">${start_time}/${end_time}</label>`;




        });
            // html+="</select>";
            $("#schedule_day").html(html);

          });


    });
  });
</script>    
@endsection