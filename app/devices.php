<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devices extends Model
{
    public function hasManyasset()
    {
    	return $this->hasMany('App\asset','device_id','id');
    }
     public function belongsTopeople()
    {
     	return $this->belongsTo('App\People','people_id','id');
    }
}
