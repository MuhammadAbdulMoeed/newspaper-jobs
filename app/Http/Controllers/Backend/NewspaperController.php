<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newspaper;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newspapers = Newspaper::all();
        return view('backend.newspaper.index' , compact('newspapers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newspaper.create');
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
        $file      = $validation['logo']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename  = 'newspaper-photo-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
        $newspaper = new Newspaper;
        $newspaper->title = $request->newspaper_title;
        $newspaper->founded_by = $request->founded_by;
        $newspaper->launch_date = $request->launch_date;
        $newspaper->slug = $request->slug;
        $newspaper->logo = $path;
        $newspaper->description = $request->desc;
        $newspaper->save();
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
        $newspaper = Newspaper::find($id);
        $newspaper->launch_date = \Carbon\Carbon::parse($newspaper->launch_date)->toDateString();

        return view('backend.newspaper.edit', compact('newspaper'));
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
        $newspaper = Newspaper::find($id);
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
        $newspaper->logo = $path;
        }
        $newspaper->title = $request->newspaper_title;
        $newspaper->founded_by = $request->founded_by;
        $newspaper->launch_date = $request->launch_date;
        $newspaper->slug = $request->slug;
        $newspaper->description = $request->desc;
        $newspaper->save();
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
        $newspaper = Newspaper::destroy($id);
        return redirect()->back();
    }
}
