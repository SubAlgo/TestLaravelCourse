<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RemiderController extends Controller
{
    public function home()
    {
      $reminders= DB::table('Reminder')->orderBy('id','asc')->get();
      return view('home',['reminders'=>$reminders]);
    }
}
