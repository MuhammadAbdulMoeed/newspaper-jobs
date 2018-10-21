<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    public function newspaper(){
    	return $this->hasOne('App\Newspaper'  , 'id' , 'newspaper_id');
    }

    public function category(){
    	return $this->hasOne('App\Category'  , 'id' , 'category_id');
    }

    public function qualification(){
    	return $this->hasOne('App\Qualification'  , 'id' , 'qualification_id');
    }
}
