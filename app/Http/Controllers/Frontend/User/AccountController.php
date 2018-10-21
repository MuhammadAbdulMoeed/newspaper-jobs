<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\subscription;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$subs = subscription::with('newspaper' , 'qualification' , 'category')->where('user_id' , \Auth::user()->id)->get();
        return view('frontend.user.account' , compact('subs'));
    }
}
