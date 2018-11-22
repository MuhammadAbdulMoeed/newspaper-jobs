<?php

namespace App\Http\Controllers\backend\Adsense;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsenseController extends Controller
{
    public function create(){
    	return view('backend.adsense.create');
    }
}
