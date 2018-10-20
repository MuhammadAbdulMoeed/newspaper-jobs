<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    protected $table="aply_jobs";

    public function getAdds(){
    	return $this->hasOne('App\Add'  , 'id' , 'adds_id');
    }

    public function getUser(){
    	return $this->hasOne('App\Models\Auth\User'  , 'id' , 'user_id');
    }
}
