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

    public function addReminder(Request $request)
    {
      $body = $request->reminder;

      DB::table('Reminder')->insert(['body'=>$body,'isFinished'=>false,'createdUserID'=>1]);
      return back(); //คือการส่งUserกลับหน้าเดิม
    }
}
