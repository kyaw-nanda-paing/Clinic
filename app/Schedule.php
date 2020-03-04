<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['user_id','date','time','doctor_id'];

     public function doctor($value='')
      {
      	return $this->belongsTo('App\Doctor');
      }

      public function booking($value='')
      {
      	return $this->hasMany('App\Booking');
      }
}
