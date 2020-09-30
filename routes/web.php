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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' =>['auth','admin']],function(){


     Route::get('/dashbord', function () {
    return view('admin.dashbord');
     });

     Route::get('/role-register','Admin\DashbordController@registered');
     Route::get('/role-edit/{id}','Admin\DashbordController@register_edit');
     Route::put('/role-register-update/{id}','Admin\DashbordController@register_update');
      Route::delete('/role-delete/{id}','Admin\DashbordController@register_delete');

     
     
});
