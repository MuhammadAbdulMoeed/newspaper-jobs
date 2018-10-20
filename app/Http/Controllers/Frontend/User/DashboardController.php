<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\ApplyJob;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$jobs = ApplyJob::with('getAdds' , 'getUser')->where('user_id' , \Auth::user()->id)->get();
        return view('frontend.user.dashboard' , compact('jobs'));
    }
}
