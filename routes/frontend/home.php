<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('testmail' , function(){
\Mail::to('mashhoodr.rehman@gmail.com')->send(new App\Mail\TestMail);
});
Route::post('customer-update', [HomeController::class, 'updateUser'])->name('customer.update');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('calendar-view' , [HomeController::class, 'calendarView'])->name('calendar.view');
Route::get('search/{slug}/{type}/{date}' ,  [HomeController::class, 'viewSlug']);
Route::get('jobtype/{id}' , [HomeController::class, 'jobType']);
Route::get('newspaper/{id}' , [HomeController::class, 'NewspaperJobs']);
Route::get('city/{id}' , [HomeController::class, 'cityAdds']);
Route::get('qualification/{id}' , [HomeController::class, 'QualificationAdds']);
Route::get('category/{id}' , [HomeController::class, 'CategoryAdds']);
Route::get('detail_page/{id}' , [HomeController::class , 'detailPage']);
Route::post('upload/user/cv' , [HomeController::class , 'uploadCv']);
Route::post('upload/user/detail' , [HomeController::class , 'userDetail']);
Route::post('upload/user/speciality' , [HomeController::class , 'userSpeciality']);
Route::get('donwload-file', [HomeController::class , 'downloadFile']);
Route::get('apply_job/{id}' , [HomeController::class , 'applyJob']);
Route::get('user-scribe-news/{id}' , [HomeController::class , 'subscribeNews']);
Route::get('user-scribe-category/{id}' , [HomeController::class , 'subscribeCate']);    
Route::get('user-scribe-qual/{id}' , [HomeController::class , 'subscribeQual']);    
Route::get('showcalenderjobs' , [HomeController::class , 'showCalenderJob']);    
Route::get('showcalendertender' , [HomeController::class , 'showCalenderTender']);    
Route::get('showcalenderadmissions' , [HomeController::class , 'showCalenderAdmission']);    
Route::get('company_add/{slug}' , [HomeController::class , 'showCompanyAdd']);
Route::get('apply_date/{slug}' , [HomeController::class , 'showDateApply']);
Route::get('last_date/{slug}' , [HomeController::class , 'showDateLast']);
Route::get('datetype/{slug}/{type}' , [HomeController::class , 'showDateType']);

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', [AccountController::class, 'index'])->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
