<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth;
use App\Models\Auth\User;
use Illuminate\Http\Request;

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
        return view('frontend.index');
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

}
