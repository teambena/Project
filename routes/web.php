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

Auth::routes();

//homepage
Route::get('/home', 'HomeController@index')->name('home');

                                
//******************************* USERS *******************************//
//overall users
Route::get('/user', 'UserController@index')->name('user');

//edit users
Route::get('edit-records','UserController@index');
Route::get('edit/{id}','UserController@show');
Route::post('edit/{id}','UserController@edit');

//delete users
Route::get('delete-records','UserController@index');
Route::get('delete/{id}','UserController@destroy');
//*********************************************************************//

//******************************* MOVIE *******************************//

//*********************************************************************//