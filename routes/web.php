<?php

use Illuminate\Support\Facades\Route;

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
   return view('welcome');
});

Route::group(['namespace' => 'Front'] , function(){
    Route::get('second' , 'FirstController@showString')-> middleware('auth');
    Route::get('second1' , 'FirstController@showString1');
    Route::get('second2' , 'FirstController@showString2');

});

Route::group(['namespace' => 'Front'], function(){

    Route::get('index','FirstController@getIndex');

});

Route::get('landing', function(){
    return view('landing');

} );

Route::get('about', function(){
    return view('about');

} );

//Route::get('index','Front\FirstController@getIndex');

Route::get('login' , function(){
    return 'must be login';

}) ->name('login');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


