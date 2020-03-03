<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['id',
                            'date',
                           'time',
                           'doctor_id'

                     ];

     public function degree($value='')
      {
      	return $this->belongsTo('App\Degree');
      }

       public function user($value='')
      {
      	return $this->belongsTo('App\User');
      }
}
