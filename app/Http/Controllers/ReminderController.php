<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReminderController extends Controller
{
    public function home()
    {
      $reminders = DB::table('Reminder')->orderBy('id','desc')->get();
      return view('home',['reminders'=> $reminders]);
    }
}
