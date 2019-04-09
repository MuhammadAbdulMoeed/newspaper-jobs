<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Http\Requests\RegisterRequest;
use App\Helpers\Frontend\Auth\Socialite;
use App\Events\Frontend\Auth\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\Frontend\Auth\UserRepository;
use Illuminate\Http\Request;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(home_route());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        abort_unless(config('access.registration'), 404);

        return view('frontend.auth.register')
            ->withSocialiteLinks((new Socialite)->getSocialLinks());
    }

    public function showEmployeeRegistrationForm()
    {
        abort_unless(config('access.registration'), 404);

        return view('frontend.auth.exe-register')
            ->withSocialiteLinks((new Socialite)->getSocialLinks());
    }

    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Throwable
     */
    public function register(Request $request)
    {
        $user = User::where('email' , '=' , $request->email)->first();
        if($user){
            return redirect()->back()->withErrors('sorry Email was already found');
        }
        $user = $this->userRepository->create($request->all());

        // auth()->login($user);
        // event(new UserRegistered($user));

        // return redirect()->back();

        // If the user must confirm their email or their account requires approval,
        // create the account but don't log them in.
        $user->notify(new UserNeedsConfirmation($user->confirmation_code));
        event(new UserRegistered($user));
            return redirect()->back()->withErrors('Confirmation needed , Email has been sent to Your Account');
        // if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
        //     event(new UserRegistered($user));

        //     return redirect($this->redirectPath())->withFlashSuccess(
        //         config('access.users.requires_approval') ?
        //             __('exceptions.frontend.auth.confirmation.created_pending') :
        //             __('exceptions.frontend.auth.confirmation.created_confirm')
        //     );
        // } else {
        //     auth()->login($user);

        //     event(new UserRegistered($user));

        //     return redirect($this->redirectPath());
        // }
    }

    public function employeeRegistrationForm(Request $request)
    {
        $user = User::where('email' , '=' , $request->email)->first();
        if($user){
            return redirect()->back()->withFlashDanger('sorry Email was already found');
        }
        $user = $this->userRepository->create($request->all());

        $user->notify(new UserNeedsConfirmation($user->confirmation_code));
        event(new UserRegistered($user));
            return redirect()->back()->withErrors('Confirmation needed , Email has been sent to Your Account');
        // auth()->login($user);
        // // event(new UserRegistered($user));

        // return redirect()->back();

        // // If the user must confirm their email or their account requires approval,
        // // create the account but don't log them in.
        // if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
        //     event(new UserRegistered($user));

        //     return redirect($this->redirectPath())->withFlashSuccess(
        //         config('access.users.requires_approval') ?
        //             __('exceptions.frontend.auth.confirmation.created_pending') :
        //             __('exceptions.frontend.auth.confirmation.created_confirm')
        //     );
        // } else {
        //     auth()->login($user);

        //     event(new UserRegistered($user));

        //     return redirect($this->redirectPath());
        
    }
}
