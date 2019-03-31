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
use App\ApplyJob;
use App\Mail\TestMail;
use App\Models\Auth\User;

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
        $validation = $request->validate([
        'newspaper_piece' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        'rel_logo' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        if($request->newspaper_piece){
            $file      = $validation['newspaper_piece']; // get the validated file
        }
        
        $adds = new Add;
        if(!empty($file)) {

        $extension = $file->getClientOriginalExtension();
        $filename  = 'newspaper-piece-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
        }
        if($request->rel_logo){
            $file      = $validation['rel_logo']; // get the validated file
        }
        
        if(!empty($file)){
                
        $extension = $file->getClientOriginalExtension();
        $filename  = time() . '.' . $extension;
        $path1      = $file->storeAs('photos', $filename);
            }
        $adds->title = $request->adds_title;
        $adds->company_name = $request->company_name;
        $adds->total_pos = $request->total_pos;
        $adds->company_abbrevation = $request->company_abbrevation;
        $adds->skills = $request->skills;
        $adds->age_limit = $request->age_limit;
        $adds->job_loc = $request->job_loc;
        $adds->gender = $request->gendar;
        $adds->working_hours = $request->work_hours;
        $adds->salary = $request->salary;
        $adds->experience = $request->experience;
        $adds->contact_number = $request->contact_num;
        $adds->address = $request->job_address;
        $adds->job_email = $request->contact_email;
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
        $adds->status = 'Inactive';
        if(isset($path)){

        $adds->newspaper_piece = $path;
        }
            if(isset($path1)){

        $adds->rel_logo = $path1;
            }
        $adds->save();
        $user = User::with('subscribe')->get();
        foreach ($user as $key => $value) {
                $array = $value->subscribe;
                foreach ($array as $key2 => $value2) {
                    if($value2->category_id == $adds->category_id || $value2->newspaper_id == $adds->newspaper_id || $value2->qualification_id == $adds->qualification_id){
                    $title = $adds->title;
                    \Mail::to($value->email)->send(new TestMail($title));
                    }
                }
            
        }
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
        // dd($add);
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
        $validation = $request->validate([
        'newspaper_piece' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        'rel_logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $adds = Add::find($id);
        if(!empty($file)){

        $extension = $file->getClientOriginalExtension();
        $filename  = 'newspaper-piece-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
        }
        $file      = $validation['rel_logo']; // get the validated file
            if(!empty($file)){
                
        $extension = $file->getClientOriginalExtension();
        $filename  = time() . '.' . $extension;
        $path1      = $file->storeAs('photos', $filename);
            }
        $adds->title = $request->adds_title;
        $adds->company_name = $request->company_name;
        $adds->total_pos = $request->total_pos;
        $adds->company_abbrevation = $request->company_abbrevation;
        $adds->skills = $request->skills;
        $adds->age_limit = $request->age_limit;
        $adds->job_loc = $request->job_loc;
        $adds->gender = $request->gendar;
        $adds->working_hours = $request->work_hours;
        $adds->salary = $request->salary;
        $adds->experience = $request->experience;
        $adds->contact_number = $request->contact_num;
        $adds->address = $request->job_address;
        $adds->job_email = $request->contact_email;
        $adds->newspaper_id = $request->newspaper_id;
        $adds->qualification_id = $request->qualification_id;
        $adds->city_id = $request->city_id;
        $adds->category_id = $request->category_id;
        $adds->job_type_id = $request->job_type_id;
        $adds->type = $request->add_types;
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
        if(isset($path)){

        $adds->newspaper_piece = $path;
        }
            if(isset($path1)){
                
        $adds->rel_logo = $path1;
            }
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

    public function createmessage(){
       return view('backend.custom.create'); 
    }
    

    public function changeStatus(request $request){
        $update = Add::where('id','=',$request->id)->update(['status' => $request->status]);
        if($update == 1){
            return json_encode($request->status);
        }else{
            return json_encode('Not Updated.');
        }
      }
}
