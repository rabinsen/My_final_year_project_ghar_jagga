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

//Route::get('/myReview', [
//    'uses' => 'UserController@myReview',
//    'as' => 'recentReview'
//]);

//Route::get('/create', [
//    'uses' => 'PropertyController@upload',
//    'as' => 'createAdd'
//]);

Route::get('/myProperties', [
    'uses' => 'DashboardController@myProperties',
    'as' => 'userProperties'
]);

Route::get('/Dashboard', [
    'uses' => 'DashboardController@dashboard',
    'as' => 'Dashboard',
    'middleware' => 'auth'
]);

Route::post('profile', 'UserController@update_avatar');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('user/activation/{token}', 'Auth\AuthController@userActivation');
Route::get('protected', ['middleware' => ['auth', 'admin'], function () {
    return "this page requires that you be logged in and an Admin";
}]);

//Route::get('/propertyList', [
//    'uses' => 'PropertyController@show',
//    'as' => 'showProperties',
//    // 'middleware' => 'auth'
//]);

//Route::get('/createCategory', [
//    'uses' => 'PropertyController@uploadCategory',
//    'as' => 'createCategory',
//]);

Route::get('/create', [
    'uses' => 'PropertyController@upload',
    'as' => 'create',
]);

//Route::post('/storeCategory', [
//    'uses' => 'PropertyController@storeCategory',
//    'as' => 'storeCategory',
//]);

Route::post('/store', [
    'uses' => 'PropertyController@store',
    'as' => 'store'
]);
//Route::get('showProperties', 'PropertyController@show');
//Route::get('/propertyList/', [
//    'uses' => 'PropertyController@index',
//    'as' => 'showProperties',
//    // 'middleware' => 'auth'
//]);


Route::get('/details/{id}', [
    'uses' => 'PropertyController@detail',
    'as' => 'details',
    // 'middleware' => 'auth'
]);

Route::post('/review}', [
    'uses' => 'PropertyController@userReview',
    'as' => 'review',
    // 'middleware' => 'auth'
]);
Route::get('properties/autocomplete', [
    'uses' => 'PropertyController@autocomplete',
    'as' => 'properties.autocomplete'
]);

Route::resource('properties', 'PropertyController');

Route::get('/userPropertyReviews', [
    'uses' => 'DashboardController@myReviews',
    'as' => 'userPropertyReviews'
]);

Route::get('/userDetails', [
    'uses' => 'DashboardController@userDetails',
    'as' => 'userDetails'
]);
Route::get('/manageProperty', [
    'uses' => 'DashboardController@manageProperty',
    'as' => 'manageProperty'
]);

Route::get('edit/{id}', [
    'uses' => 'PropertyController@edit',
    'as' => 'edit'
]);

Route::post('updates/{id}', [
    'uses' => 'PropertyController@updates',
    'as' => 'updates'
]);

Route::delete('delete/{id}', [
    'uses' => 'PropertyController@delete',
    'as' => 'delete'
]);

