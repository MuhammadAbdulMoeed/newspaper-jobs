<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('backend.cities.index' , compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validation = $request->validate([
        'logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $city = City::where('title' , $request->city_title)->first();
        // dd($city , $request->all());
        if($city){
            return redirect()->back()->withErrors(['title', 'Title already added']);
        }
        $file      = $validation['logo']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename  = 'city-photo-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
        $cities = new City;
        $cities->title = $request->city_title;
        $cities->logo = $path;
        $cities->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::find($id);
        return view('backend.cities.edit' , compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $validation = $request->validate([
        'logo' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        if($validation){
        $file      = $validation['logo']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename  = 'newspaper-photo-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
        $city->logo = $path;
        }
        $city->title = $request->city_title;
        $city->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::destroy($id);
        return redirect()->back();
    }
}
