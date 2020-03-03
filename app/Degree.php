<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = ['name','photo'];

    public function doctor($value='')
      {
      	return $this->hasMany('App\Doctor');
      }
}
