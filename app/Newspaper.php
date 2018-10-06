<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    public function adds(){
    	return $this->hasMany('App\Add' , 'newspaper_id' , 'id');
    }
}
