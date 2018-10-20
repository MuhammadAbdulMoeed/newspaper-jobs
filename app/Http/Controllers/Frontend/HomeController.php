<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Newspaper;
use App\City;
use App\Category;
use App\JobType;
use App\Qualification;
use App\Add;
use App\ApplyJob;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $newspapers = Newspaper::all();
        $cities = City::paginate(5, ['*'], 'cities');
        $category = Category::paginate(5, ['*'], 'categories');
        $qualification = Qualification::paginate(5, ['*'], 'qualification');
        $jobType = JobType::paginate(5, ['*'], 'jobtypes');
        $jobs = Add::with('getCity')->where('type' , 'jobs')->paginate(5, ['*'], 'jobs');
        $admissions = Add::with('getCity')->where('type' , 'admissions')->paginate(5, ['*'], 'admissions');
        $tenders = Add::with('getCity')->where('type' , 'tenders')->paginate(5, ['*'], 'tenders');
        return view('frontend.index' , compact('newspapers' , 'cities' , 'category' , 'qualification' , 'jobType' , 'jobs' , 'tenders' , 'admissions'));
    }

    public function updateUser(Request $request){
    	$user = new User;
    	$user->mobile_no = $request->mobile_no;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
    	    if ($user) {
                /*
                 * Add the default site role to the new user
                 */
                $user->assignRole(config('access.users.default_role'));
            }
            return redirect()->back();
    }

    public function calendarView(){
        return view('frontend.calendar-list');
    }

    public function viewSlug($slug , $type , $date , Request $request){
        $newspaper = Add::whereHas('getNewsPaper' , function($q) use ($slug){
           $q->where('slug' , $slug); 
        })->where('type' , $type)
        ->where(function ($query) use ($date){
          $query->whereDate('created_at' , $date)->orWhereDate('last_date' , $date)->orWhereDate('apply_by' , $date);
        })
        ->with('getCity')->get();
        $paper = Newspaper::where('slug' , $slug)->first();
        $newspapers = Newspaper::all();
        return view('frontend.date-adds' , compact('paper' , 'newspaper' , 'newspapers'));
    }
    public function jobType($id){
        $newspaper = Add::where('job_type_id' , $id)->get();
        $newspapers = Newspaper::all();
        return view('frontend.jobtype-adds' , compact('newspaper' , 'newspapers'));
    }
    public function cityAdds($id){
        $newspaper = Add::where('city_id' , $id)->get();
        $newspapers = Newspaper::all();
        return view('frontend.city-adds' , compact('newspaper' , 'newspapers'));
    }
    public function QualificationAdds($id){
        $newspaper = Add::where('qualification_id' , $id)->get();
        $newspapers = Newspaper::all();
        return view('frontend.qualification-adds' , compact('newspaper' , 'newspapers'));
    }
    public function CategoryAdds($id){
        $newspaper = Add::where('category_id' , $id)->get();
        $newspapers = Newspaper::all();
        return view('frontend.category-adds' , compact('newspaper' , 'newspapers'));
    }
    public function detailPage($id){
        $add = Add::with('getCity' , 'getNewsPaper' , 'getCategory', 'getJobType' , 'getQualification')->where('id' , $id)->first();
        // dd($add);
        return view('frontend.job_detail' , compact('add'));
    }
    public function uploadCv(Request $request){
        $file = $request->file('file');
   
      //Display File Name
        $file_name = time().$file->getClientOriginalName();
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      $filee = $file->move($destinationPath,$file_name);
      $user = \Auth::user();
      $user->cv = $destinationPath.'/'.$file_name;
      $user->save();
        return redirect()->back();
    }
    public function downloadFile()
    {
        $myFile = \Auth::user()->cv;
        $headers = ['Content-Type: application/pdf'];
        $name = str_replace(' ', '_',\Auth::user()->name);
        $newName = $name.'-CV'.'.pdf';


        return response()->download($myFile, $newName, $headers);
    }

    public function applyJob($id){
      $applied_job = ApplyJob::where('user_id' , \Auth::user()->id)->where('newspaper_id' , $id)->first();
      if($applied_job){
        return redirect()->back();
      }
      $apply_job = new ApplyJob;
      $apply_job->user_id = \Auth::user()->id;
      $apply_job->newspaper_id = $id;
      $apply_job->save();
      return redirect()->back();
    }

    public function userDetail(Request $request){
      $user = User::find(\Auth::user()->id);
      $user->gendar = $request->gendar;
      $user->institution_one = $request->institute;
      $user->degree_title_two = $request->degree_title;
      $user->passing_year_two = $request->passing_year;
      $user->save();
      return redirect()->back();
    }

}
