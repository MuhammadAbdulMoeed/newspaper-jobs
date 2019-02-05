<?php

namespace App\Http\Controllers\backend\Adsense;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdsenseCode;

class AdsenseController extends Controller
{
	public function index(){
		$adsenses = AdsenseCode::all();
		return view('backend.adsense.list' , compact('adsenses'));
	}
    public function create(){
    	return view('backend.adsense.create');
    }

    public function store(Request $request){
        if(empty($request->code))
        {
            return redirect()->back()->withErrors('Code Required');
        }
    	$adsense = new AdsenseCode;
    	$adsense->code = $request->code;
    	$adsense->size = $request->size;
    	$adsense->save();
    	return redirect()->back();
    }
    public function edit($id){
    	$adsense = AdsenseCode::find($id);
    	return view('backend.adsense.edit' , compact('adsense'));
    }

    public function update($id , Request $request){
        if(empty($request->code))
        {
            return redirect()->back()->withErrors('Code Required');
        }
    	$adsense = AdsenseCode::find($id);
    	$adsense->code = $request->code;
    	$adsense->size = $request->size;
    	$adsense->save();
    	return redirect()->back();
    }

    public function delete($id){
    	$adsense = AdsenseCode::find($id);
    	$adsense->delete();
    	return redirect()->back();
    }


}
