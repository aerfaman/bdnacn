<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asset extends Model

{
	protected $fillable = ['name', 'type', 'device_id'];
    public function belongsTodevice()
    {
     	return $this->belongsTo('App\devices','device_id','id');
    }
}
