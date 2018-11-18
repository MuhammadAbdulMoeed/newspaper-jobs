<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function add(){
    	return $this->belongsTo('App\Add' , 'id' , 'city_id');
    }
}
