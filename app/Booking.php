<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['note','patient_id','schedule_id','token_no'];

    public function patient($value='')
      {
      	return $this->belongsTo('App\Patient');
      }


      public function schedule($value='')
      {
      	return $this->belongsTo('App\Schedule');
      }
}
