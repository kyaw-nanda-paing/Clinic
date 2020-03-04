<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['note','patient_id','schedule_id','doctor_id','token_no'];

    public function patient($value='')
      {
      	return $this->belongsTo('App\Patient');
      }

      public function schedule($value='')
      {
      	return $this->belongsTo('App\Schedule');
      }

      public function doctor($value='')
      {
      	return $this->belongsTo('App\Doctor');
      }
}
