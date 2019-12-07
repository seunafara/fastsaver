<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\FixedPlan;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/profile', 'ProfileController@setting');
Route::get('/profile', 'ProfileController@setting');

Route::get('/plans/edit/{id}', function ($id){

    $fixed_plans = FixedPlan::findOrFail($id);

    $fixed_plans['plan_amount'] = $fixed_plans['plan_amount'] / 100;
    $fixed_plans['plan_balance'] = $fixed_plans['plan_balance'] / 100;

    return view('fixed.edit', compact('fixed_plans'));
});




Route::resource('/plans', 'UserFixedPlanController');
//Route::get('/profile/edit/', 'ProfileController@edit');



Route::group(['middleware'=>'admin'], function (){




    /**
     * Start edit routes
     * Anything edit put it before the route resource, edit doesn't work as a resource route anymore
     *
     */

    Route::get('/admin/users/edit/{id}', function ($id){

        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    });

    Route::get('/admin/fixedplan/edit/{id}', function ($id){

        $users = User::pluck('name', 'id')->all();
        $fixed_plans = FixedPlan::findOrFail($id);
        return view('admin.fixed.edit', compact('fixed_plans', 'users'));
    });



    // easier option
    Route::get('/admin/add/{id}', 'FixedPlansController@addInterest');

    // using just routes to add interest

//    Route::get('/admin/fixedplan/{id}/addinterest', function ($id){
//
//        $fixed_plan = FixedPlan::findOrFail($id);
//
//        $interest = round(( $fixed_plan->plan_balance * ($fixed_plan->rate/100) * 1 ) / 364) ;
//
//
//        $fixed_plan->next_interest_date = new DateTime($fixed_plan->next_interest_date);
//        $fixed_plan->update([$fixed_plan->plan_balance = $fixed_plan->plan_balance + $interest, $fixed_plan->next_interest_date = $fixed_plan->next_interest_date->modify('+1 day')]);
//
//
//        return redirect('/admin/fixedplan');
//    });

    // end edit routes

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/fixedplan', 'FixedPlansController');

    Route::resource('/admin', 'AdminController');


//
//    Route::resource('admin/posts', 'AdminPostsController');
//
//    Route::resource('admin/categories', 'AdminCategoriesController');
//
//    Route::resource('admin/media', 'AdminMediaController');
//
//    Route::resource('admin/comments', 'PostCommentsController');
//
//    Route::resource('admin/comment/replies', 'CommentRepliesController');

});
