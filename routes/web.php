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

Route::get('/', function () {
    return view('blog');

}); 
Route::get('blog','BlogController@index')->name('blog');
// Route::post('blog','BlogController@store')->name('blog.post');
Route::post ( '/addItem', 'BlogController@addItem' );
Route::get ( 'insta', 'InstaController@index');
Route::post ( 'create', 'InstaController@create');
Route::get( 'redirect', 'InstaController@redirect');

Route::get('image-crop', 'ImageController@imageCrop');
Route::post('image-crop', 'ImageController@imageCropPost');



     

 
// Route::get('test', function () {
//     return view('test');
    
// });


// Route::post('login', 'API\PassportController@login');
// Route::post('register', 'API\PassportController@register');
// Route::group(['middleware'=>'Auth::api'], function() {
//     Route::post('get-details', 'API\PasssportController@getDetails');
// });
