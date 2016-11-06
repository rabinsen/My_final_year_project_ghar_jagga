<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/test', function () {
    return view('test');
});

Route::get('/', 'PropertyController@showLatest');
Route::get('about', 'PostController@show');


//Route::resource('articles', 'ArticlesController');

Route::get('/profile', [
    'uses' => 'DashboardController@profile',
    'as' => 'profiles'
]);

Route::get('/profileInfo', [
    'uses' => 'UserController@profileInfo',
    'as' => 'profileInfo'
]);

Route::post('/uploadProfile', [
    'uses' => 'UserController@upload',
    'as' => 'uploadProfile'
]);



Route::get('/myProperties', [
    'uses' => 'DashboardController@myProperties',
    'as' => 'userProperties'
]);

Route::get('/Dashboard', [
    'uses' => 'DashboardController@dashboard',
    'as' => 'Dashboard',
    'middleware' => 'auth'
]);

Route::post('profile',[
    'uses' => 'UserController@updateAvatar',
    'as' => 'profile',
    'middleware' => 'auth'
]);

Route::get('showProfile',[
    'uses' => 'UserController@showProfile',
    'as' => 'showProfile',
    'middleware' => 'auth'
]);

Route::get('editProfile/{id}',[
    'uses' => 'UserController@editProfile',
    'as' => 'editProfile',
    'middleware' => 'auth'
]);

Route::post('updateProfile/{id}',[
    'uses' => 'UserController@updateProfile',
    'as' => 'updateProfile',
    'middleware' => 'auth'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('user/activation/{token}', 'Auth\AuthController@userActivation');
Route::get('protected', ['middleware' => ['auth', 'admin'], function () {
    return "this page requires that you be logged in and an Admin";
}]);


Route::get('/create', [
    'uses' => 'PropertyController@upload',
    'as' => 'create',
    'middleware' => 'auth'
]);


Route::post('/store', [
    'uses' => 'PropertyController@store',
    'as' => 'store',
    'middleware' => 'auth'
]);


Route::get('/details/{id}', [
    'uses' => 'PropertyController@detail',
    'as' => 'details',
    // 'middleware' => 'auth'
]);

Route::post('/review}', [
    'uses' => 'PropertyController@userReview',
    'as' => 'review',
    'middleware' => 'auth'
]);
Route::get('properties/autocomplete', [
    'uses' => 'PropertyController@autocomplete',
    'as' => 'properties.autocomplete'
]);

Route::resource('properties', 'PropertyController');

Route::get('/userPropertyReviews', [
    'uses' => 'DashboardController@myReviews',
    'as' => 'userPropertyReviews',
    'middleware' => 'auth'
]);

Route::get('/userDetails', [
    'uses' => 'DashboardController@userDetails',
    'as' => 'userDetails',
    'middleware' => 'auth'
]);
Route::get('/manageProperty', [
    'uses' => 'DashboardController@manageProperty',
    'as' => 'manageProperty',
    'middleware' => 'auth'
]);

Route::get('edit/{id}', [
    'uses' => 'PropertyController@edit',
    'as' => 'edit',
    'middleware' => 'auth'
]);

Route::post('updates/{id}', [
    'uses' => 'PropertyController@updates',
    'as' => 'updates',
    'middleware' => 'auth'
]);

Route::delete('delete/{id}', [
    'uses' => 'PropertyController@delete',
    'as' => 'delete',
    'middleware' => 'auth'
]);

//Route::delete('/details', [
//    'uses' => 'PropertyController@sorting',
//    'as' => 'sorting',
////    'middleware' => 'auth'
//]);

Route::get('filter', [
    'uses' => 'PropertyController@filter',
    'as' => 'filter',
//    'middleware' => 'auth'
]);

//Route::get('agents', [
//    'uses' => ''
//]);

Route::group(['prefix' => 'subscription'], function () {
    Route::get('/', [
        'as' => 'subscription',
        'uses' => 'SubscriptionController@getIndex'
    ]);

//    Route::group(['middleware' => 'notSubscribe'], function(){
    Route::get('join', [
        'as' => 'subscription-join',
        'uses' => 'SubscriptionController@getJoin'
    ]);

    Route::post('join', [
        'as' => 'subscription-join1',
        'uses' => 'SubscriptionController@postJoin'
    ]);
//    });
    Route::get('cancel', [
        'as' => 'subscription-cancel',
        'uses' => 'SubscriptionController@getCancel'
    ]);
    Route::get('resume', [
        'as' => 'subscription-resume',
        'uses' => 'SubscriptionController@getResume'
    ]);

});


