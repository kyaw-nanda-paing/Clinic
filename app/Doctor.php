<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['user_id','profile','address','phone','gender','dob','degree_id'];

     public function degree($value='')
      {
      	return $this->belongsTo('App\Degree');
      }

       public function user($value='')
      {
      	return $this->belongsTo('App\User');
      }

      public function schedule($value='')
      {
      	return $this->hasMany('App\Schedule');
      }

      public function booking($value='')
      {
      	return $this->hasMany('App\Booking');
      }
}
