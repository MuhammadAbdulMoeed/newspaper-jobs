<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    public function add(){
    	return $this->belongsTo('App\Add' , 'id' , 'qualification_id');
    }
}
