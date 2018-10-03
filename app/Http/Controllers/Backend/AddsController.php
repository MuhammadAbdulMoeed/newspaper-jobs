<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newspaper;
use App\City;
use App\Category;
use App\JobType;
use App\Qualification;
use App\Add;

class AddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adds = Add::with('getCity' , 'getNewsPaper' , 'getCategory' , 'getJobType' , 'getQualification')->get();
        return view('backend.adds.index' , compact('adds'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newspaper = Newspaper::all();
        $qualification = Qualification::all();
        $city = City::all();
        $category = Category::all();
        $jobType = JobType::all();
        return view('backend.adds.create' , compact('newspaper' , 'qualification' , 'city' , 'category' , 'jobType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adds = new Add;
        $adds->title = $request->adds_title;
        $adds->newspaper_id = $request->newspaper_id;
        $adds->qualification_id = $request->qualification_id;
        $adds->city_id = $request->city_id;
        $adds->category_id = $request->category_id;
        $adds->job_type_id = $request->job_type_id;
        $adds->type = $request->add_types;
        $adds->minimum_requirements = $request->min_req;
        $adds->apply_by = $request->apply_by;
        $adds->last_date = $request->last_date;
        $adds->description = $request->description;
        $adds->save();
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
        $add = Add::find($id);
        $newspaper = Newspaper::all();
        $qualification = Qualification::all();
        $city = City::all();
        $category = Category::all();
        $jobType = JobType::all();
        return view('backend.adds.edit' , compact('newspaper' , 'qualification' , 'city' , 'category' , 'jobType' , 'add'));
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
        $adds = Add::find($id);
        $adds->title = $request->adds_title;
        $adds->newspaper_id = $request->newspaper_id;
        $adds->qualification_id = $request->qualification_id;
        $adds->city_id = $request->city_id;
        $adds->category_id = $request->category_id;
        $adds->job_type_id = $request->job_type_id;
        $adds->type = $request->add_types;
        $adds->minimum_requirements = $request->min_req;
        $adds->apply_by = $request->apply_by;
        $adds->last_date = $request->last_date;
        $adds->description = $request->description;
        $adds->save();
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
        Add::destroy($id);
        return redirect()->back();
    }
}
