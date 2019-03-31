<?php

use App\Http\Controllers\Backend\Auth\Role\RoleController;
use App\Http\Controllers\Backend\Auth\User\UserController;
use App\Http\Controllers\Backend\Auth\User\UserAccessController;
use App\Http\Controllers\Backend\Auth\User\UserSocialController;
use App\Http\Controllers\Backend\Auth\User\UserStatusController;
use App\Http\Controllers\Backend\Auth\User\UserSessionController;
use App\Http\Controllers\Backend\Auth\User\UserPasswordController;
use App\Http\Controllers\Backend\Auth\User\UserConfirmationController;
use App\Http\Controllers\Backend\Auth\CitiesController;

/*
 * All route names are prefixed with 'admin.auth'.
 */
Route::group([
    'prefix'     => 'auth',
    'as'         => 'auth.',
    'namespace'  => 'Auth',
    'middleware' => 'role:'.config('access.users.admin_role'),
], function () {
    /*
     * User Management
     */
    Route::group(['namespace' => 'User'], function () {

        /*
         * User Status'
         */
        Route::get('user/deactivated', [UserStatusController::class, 'getDeactivated'])->name('user.deactivated');
        Route::get('user/deleted', [UserStatusController::class, 'getDeleted'])->name('user.deleted');

        /*
         * User CRUD
         */
        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('user', [UserController::class, 'store'])->name('user.store');

        /*
         * Specific User
         */
        Route::group(['prefix' => 'user/{user}'], function () {
            // User
            Route::get('/', [UserController::class, 'show'])->name('user.show');
            Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
            Route::patch('/', [UserController::class, 'update'])->name('user.update');
            Route::delete('/', [UserController::class, 'destroy'])->name('user.destroy');

            // Account
            Route::get('account/confirm/resend', [UserConfirmationController::class, 'sendConfirmationEmail'])->name('user.account.confirm.resend');

            // Status
            Route::get('mark/{status}', [UserStatusController::class, 'mark'])->name('user.mark')->where(['status' => '[0,1]']);

            // Social
            Route::delete('social/{social}/unlink', [UserSocialController::class, 'unlink'])->name('user.social.unlink');

            // Confirmation
            Route::get('confirm', [UserConfirmationController::class, 'confirm'])->name('user.confirm');
            Route::get('unconfirm', [UserConfirmationController::class, 'unconfirm'])->name('user.unconfirm');

            // Password
            Route::get('password/change', [UserPasswordController::class, 'edit'])->name('user.change-password');
            Route::patch('password/change', [UserPasswordController::class, 'update'])->name('user.change-password.post');

            // Access
            Route::get('login-as', [UserAccessController::class, 'loginAs'])->name('user.login-as');

            // Session
            Route::get('clear-session', [UserSessionController::class, 'clearSession'])->name('user.clear-session');

            // Deleted
            Route::get('delete', [UserStatusController::class, 'delete'])->name('user.delete-permanently');
            Route::get('restore', [UserStatusController::class, 'restore'])->name('user.restore');
        });
    });

    /*
     * Role Management
     */
    Route::group(['namespace' => 'Role'], function () {
        Route::get('role', [RoleController::class, 'index'])->name('role.index');
        Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('role', [RoleController::class, 'store'])->name('role.store');

        Route::group(['prefix' => 'role/{role}'], function () {
            Route::get('edit', [RoleController::class, 'edit'])->name('role.edit');
            Route::patch('/', [RoleController::class, 'update'])->name('role.update');
            Route::delete('/', [RoleController::class, 'destroy'])->name('role.destroy');
        });
    });




});


    Route::get('adsense-create' , 'Adsense\AdsenseController@create')->name('adsense.create');
    Route::post('adsense-store' , 'Adsense\AdsenseController@store')->name('adsense.store');
    Route::get('adsense-list' , 'Adsense\AdsenseController@index')->name('adsense.list');
    Route::get('adsense-edit/{id}' , 'Adsense\AdsenseController@edit')->name('adsense.edit');
    Route::get('adsense-delete/{id}' , 'Adsense\AdsenseController@delete')->name('adsense.delete');
    Route::post('adsense-update/{id}' , 'Adsense\AdsenseController@update')->name('adsense.update');

    // Cities Crud
    Route::get('cities' , 'CitiesController@index')->name('cities.index');
    Route::get('create-cities' , 'CitiesController@create')->name('cities.create');
    Route::post('store-cities' , 'CitiesController@store')->name('cities.store');
    Route::get('edit-cities/{id}' , 'CitiesController@edit')->name('cities.edit');
    Route::post('update-cities/{id}' , 'CitiesController@update')->name('cities.update');
    Route::get('del-cities/{id}' , 'CitiesController@destroy')->name('cities.delete');

    // Jobs Types Crud
    Route::get('jobtype' , 'JobTypesController@index')->name('jobtype.index');
    Route::get('create-jobtype' , 'JobTypesController@create')->name('jobtype.create');
    Route::post('store-jobtype' , 'JobTypesController@store')->name('jobtype.store');
    Route::get('edit-jobtype/{id}' , 'JobTypesController@edit')->name('jobtype.edit');
    Route::post('update-jobtype/{id}' , 'JobTypesController@update')->name('jobtype.update');
    Route::get('del-jobtype/{id}' , 'JobTypesController@destroy')->name('jobtype.delete');

    // NewsPaper Controller
    Route::get('newspaper' , 'NewspaperController@index')->name('newspaper.index');
    Route::get('create-newspaper' , 'NewspaperController@create')->name('newspaper.create');
    Route::post('store-newspaper' , 'NewspaperController@store')->name('newspaper.store');
    Route::get('edit-newspaper/{id}' , 'NewspaperController@edit')->name('newspaper.edit');
    Route::post('update-newspaper/{id}' , 'NewspaperController@update')->name('newspaper.update');
    Route::get('del-newspaper/{id}' , 'NewspaperController@destroy')->name('newspaper.delete');

    // Categories Controller
    Route::get('categories' , 'CategoriesController@index')->name('categories.index');
    Route::get('create-categories' , 'CategoriesController@create')->name('categories.create');
    Route::post('store-categories' , 'CategoriesController@store')->name('categories.store');
    Route::get('edit-categories/{id}' , 'CategoriesController@edit')->name('categories.edit');
    Route::post('update-categories/{id}' , 'CategoriesController@update')->name('categories.update');
    Route::get('del-categories/{id}' , 'CategoriesController@destroy')->name('categories.delete');

    // Qualification Management
    Route::get('qualification' , 'QualificationController@index')->name('qualification.index');
    Route::get('create-qualification' , 'QualificationController@create')->name('qualification.create');
    Route::post('store-qualification' , 'QualificationController@store')->name('qualification.store');
    Route::get('edit-qualification/{id}' , 'QualificationController@edit')->name('qualification.edit');
    Route::post('update-qualification/{id}' , 'QualificationController@update')->name('qualification.update');
    Route::get('del-qualification/{id}' , 'QualificationController@destroy')->name('qualification.delete');

    // Adds Management
    Route::get('adds' , 'AddsController@index')->name('adds.index');
    Route::get('create-adds' , 'AddsController@create')->name('adds.create');
    Route::post('store-adds' , 'AddsController@store')->name('adds.store');
    Route::get('edit-adds/{id}' , 'AddsController@edit')->name('adds.edit');
    Route::post('update-adds/{id}' , 'AddsController@update')->name('adds.update');
    Route::get('del-adds/{id}' , 'AddsController@destroy')->name('adds.delete');
    Route::get('changeStatus/' , 'AddsController@changeStatus')->name('adds.changeStatus');

    // Custom Controller
    Route::get('message' , 'CustomMessage@index')->name('message.index');
    Route::get('create-message' , 'CustomMessage@create')->name('message.create');
    Route::post('store-message' , 'CustomMessage@store')->name('message.store');
    Route::get('edit-message/{id}' , 'CustomMessage@edit')->name('message.edit');
    Route::post('update-message/{id}' , 'CustomMessage@update')->name('message.update');
    Route::get('del-message/{id}' , 'CustomMessage@destroy')->name('message.delete');

    Route::group(['namespace' => 'Executive'], function () {
    // For executive User
    Route::get('exec-adds' , 'AddsController@index')->name('ex.adds.index');
    Route::get('exec-create-adds' , 'AddsController@create')->name('ex.adds.create');
    Route::post('exec-store-adds' , 'AddsController@store')->name('ex.adds.store');
    Route::get('exec-edit-adds/{id}' , 'AddsController@edit')->name('ex.adds.edit');
    Route::post('exec-update-adds/{id}' , 'AddsController@update')->name('ex.adds.update');
    Route::get('exec-del-adds/{id}' , 'AddsController@destroy')->name('ex.adds.delete');
    Route::get('exec-adds-applied' , 'AddsController@appliedAds')->name('ex.adds.applied');
    Route::get('exec-adds-status/{id}' , 'AddsController@AdsStatus')->name('ex.adds.status');

    // Ads Managment
    Route::get('create-addsen' , 'AddsController@createAdd')->name('mgmt.create');

    


    });