<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomMessagee;
use App\Newspaper;

class CustomMessage extends Controller
{
    public function index()
    {
        $message = CustomMessagee::all();
        return view('backend.custom.index' , compact('message'));
    }

    public function create(){
        $newspapers = Newspaper::all();
    	return view('backend.custom.create' , compact('newspapers'));
    }

    public function store(Request $request)
    {
        $custom = new CustomMessagee;
        
        $custom->message = $request->message;
        if($request->status == "on"){
        	$custom->status = "1";
        }
        $custom->date = $request->date;
        $custom->newspaper_id = $request->newspaper;
        $custom->save();

        return redirect()->back();
    }

    public function update(Request $request , $id)
    {
        $custom = CustomMessagee::find($id);
        
        $custom->message = $request->message;
        $custom->date = $request->date;
        if($request->status == "on"){
            $custom->status = "1";
        }
        else{
         $custom->status = "0";   
        }
        $custom->newspaper_id = $request->newspaper;
        $custom->save();
        return redirect()->back();
    }

    public function edit($id){
        $newspapers = Newspaper::all();
        $message = CustomMessagee::find($id);
        return view('backend.custom.edit' , compact('message' , 'newspapers'));
    }

    public function destroy($id){
        $message = CustomMessagee::find($id);
        $message->delete();
        return redirect()->back();
    }
}
