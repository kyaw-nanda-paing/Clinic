<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['user_id','profile','address','phone','gender','dob'];

    public function user($value='')
      {
      	return $this->belongsTo('App\User');
      }
}
