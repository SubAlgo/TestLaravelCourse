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
Route::get('/temp',function ()
    {
    return view('home');
  });

Route::get('/', function () {
    return view('profile');
    //return view('welcome');
    //return ['Name'=>'Kornchaval' , 'SurName'=>'Prathipasen'];
    //return "5556";
});

//----------------------------------------------
Route::get('/profile','ProfileController@getProfile');

//-----------------------------------------------

Route::get('/byear','ProfileController@getYear');
Route::get('/{id}/name','ProfileController@getName');
Route::get('/{id}/surname','ProfileController@getSurName');

Route::get('/name','profile@getname');
Route::get('/surname','profile@getsurname');
Route::get('/brithday','profile@getbrithday');
Route::get('/age','profile@getage');

Route::get('/profile/age','profile@getage');
