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
Route::get('/about','me@getme');

Route::get('/temp',function ()
    {
    return view('home');
  });

//Route::get('/','RemiderController@home');
Route::get('/','ReminderController@home');

Route::post('/reminder/new','ReminderController@addReminder');
Route::delete('/reminder/delete','ReminderController@deleteReminder');

Route::post('/remindertype/new', 'ReminderTypeController@addReminderType');

Route::get('/finished','ReminderController@showFinishedReminder');

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
