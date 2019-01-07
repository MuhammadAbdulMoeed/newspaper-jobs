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
use App\subscription;

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
        $cities = City::has('add')->get();
        $category = Category::paginate(20, ['*'], 'categories');
        $qualification = Qualification::paginate(20, ['*'], 'qualification');
        $jobType = JobType::paginate(20, ['*'], 'jobtypes');
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
       $newspapers = Newspaper::all();
        return view('frontend.calendar-list' , compact('newspapers'));
    }

    public function viewSlug($slug , $type , $date , Request $request){
      // $date = \Carbon\Carbon::createFromFormat('d/m/Y' , $date);
      // dd($date , $request->all());

        $newspaper = Add::whereHas('getNewsPaper' , function($q) use ($slug){
           $q->where('slug' , $slug); 
        })->where('type' , $type)
        ->whereDate('created_at' , $date)
        ->with('getNewsPaper')
        ->with('getCity')->get();
        $paper = Newspaper::where('slug' , $slug)->first();
        $newspapers = Newspaper::all();
        return view('frontend.date-adds' , compact('paper' , 'newspaper' , 'newspapers' , 'slug' , 'date'));
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
        $qualification_id = $id;
        return view('frontend.qualification-adds' , compact('newspaper' , 'newspapers' , 'qualification_id'));
    }
    public function CategoryAdds($id){
        $newspaper = Add::where('category_id' , $id)->get();
        $newspapers = Newspaper::all();
        $cat_id = $id;
        return view('frontend.category-adds' , compact('newspaper' , 'newspapers' , 'cat_id'));
    }
    public function detailPage($id){
        $add = Add::with('getCity' , 'getNewsPaper' , 'getCategory', 'getJobType' , 'getQualification')->where('id' , $id)->first();
        $rel = Add::select('id' , 'title')->where('category_id' , $add->category_id)->take(8)->get();
        return view('frontend.job_detail' , compact('add' , 'rel'));
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
      if(!\Auth::check()){
        return redirect()->back();
      }
      $applied_job = ApplyJob::where('user_id' , \Auth::user()->id)->where('adds_id' , $id)->first();
      if($applied_job){
        return redirect()->back();
      }
      $apply_job = new ApplyJob;
      $apply_job->user_id = \Auth::user()->id;
      $apply_job->adds_id = $id;
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

    public function subscribeNews($id){
      $news = subscription::where('user_id' , \Auth::user()->id)->where('newspaper_id' , $id)->first();
      if($news){
        return redirect()->back();
      }
      $subscription = new subscription;
      $subscription->newspaper_id = $id;
      $subscription->user_id = \Auth::user()->id;
      $subscription->save();
      return redirect()->back();
    }
    public function subscribeCate($id){
      $news = subscription::where('user_id' , \Auth::user()->id)->where('category_id' , $id)->first();
      if($news){
        return redirect()->back();
      }
      $subscription = new subscription;
      $subscription->category_id = $id;
      $subscription->user_id = \Auth::user()->id;
      $subscription->save();
      return redirect()->back();
    }
    public function unSubscribeCate($id){
      $news = subscription::where('user_id' , \Auth::user()->id)->where('category_id' , $id)->first();
      $news->delete();
      return redirect()->back();
    }
    public function subscribeQual($id){
      $news = subscription::where('user_id' , \Auth::user()->id)->where('qualification_id' , $id)->first();
      if($news){
        return redirect()->back();
      }
      $subscription = new subscription;
      $subscription->qualification_id = $id;
      $subscription->user_id = \Auth::user()->id;
      $subscription->save();
      return redirect()->back();
    }
    public function unSubscribeQual($id){
       $news = subscription::where('user_id' , \Auth::user()->id)->where('qualification_id' , $id)->first();
      $news->delete();
      return redirect()->back();
    }
    public function unSubscribeNews($id){
       $news = subscription::where('user_id' , \Auth::user()->id)->where('newspaper_id' , $id)->first();
      $news->delete();
      return redirect()->back();
    }

    public function showCalenderJob(){
      $adds = Add::where('type' , 'jobs')->groupBy(\DB::raw('Date(created_at)'))->select('created_at' , \DB::raw('count(*) as count') , 'type')->get();
      $adds->map(function ($add) {
        $add['title'] = "Pakistan Jobs" . ": ".$add->count;
        $add['start'] = $add->created_at->toDateString();
        $add['end'] = $add->created_at->toDateString();
        $add['html'] = url('datetype/').'/'.$add->created_at->toDateString().'/'.'jobs';
        return $add;
    });
      return response()->json($adds);

    }

    public function showCalenderTender(){
      $adds = Add::where('type' , 'tenders')->groupBy(\DB::raw('Date(created_at)'))->select('created_at' , \DB::raw('count(*) as count') , 'type')->get();
      $adds->map(function ($add) {
        $add['title'] = "Abroad Jobs" . ": ".$add->count;
        $add['start'] = $add->created_at->toDateString();
        $add['end'] = $add->created_at->toDateString();
        $add['html'] = url('datetype/').'/'.$add->created_at->toDateString().'/'.'tenders';
        return $add;
    });
      return response()->json($adds);

    }

    public function showCalenderAdmission(){
      $adds = Add::where('type' , 'admissions')->groupBy(\DB::raw('Date(created_at)'))->select('created_at' , \DB::raw('count(*) as count') , 'type')->get();
      $adds->map(function ($add) {
        $add['title'] = "Online Jobs" . ": ".$add->count;
        $add['start'] = $add->created_at->toDateString();
        $add['end'] = $add->created_at->toDateString();
        $add['html'] = url('datetype/').'/'.$add->created_at->toDateString().'/'.'admissions';
        return $add;
    });
      return response()->json($adds);

    }

    public function userSpeciality(Request $request){
      $cat = implode(',' , $request->categories);
      $user = \Auth::user();
      $user->speciality = $cat;
      $user->save();
      return redirect()->back();
    }

    public function showCompanyAdd($slug){

      $newspaper = Add::where('company_name' , $slug)->get();
      $newspapers = Newspaper::all();
      return view('frontend.company-add', compact('newspaper' , 'newspapers'));
    
    }

    public function showDateLast($date){

      $newspaper = Add::whereDate('last_date' , $date)->get();
      $newspapers = Newspaper::all();
      return view('frontend.last-date', compact('newspaper' , 'newspapers'));
    
    }

    public function showDateApply($date){

      $newspaper = Add::whereDate('created_at' , $date)->get();
      $newspapers = Newspaper::all();
      return view('frontend.apply-date-ad', compact('newspaper' , 'newspapers'));
    
    }

    public function showDateType($date , $type){

      $newspaper = Add::where('type' , $type)
        ->where(function ($query) use ($date){
          $query->whereDate('created_at' , $date)->orWhereDate('last_date' , $date)->orWhereDate('apply_by' , $date);
        })
        ->with('getCity')->get();
      $newspapers = Newspaper::all();
      return view('frontend.type-date-add', compact('newspaper' , 'newspapers'));
    
    }

    public function NewspaperJobs($id){
      $newspaper = Add::where('newspaper_id' , $id)->get();
      $news = Newspaper::find($id);
        $newspapers = Newspaper::all();
        return view('frontend.newspaper-adds' , compact('newspaper' , 'newspapers' , 'news'));

    }

}
