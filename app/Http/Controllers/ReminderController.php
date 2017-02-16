<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ReminderModel; //Import ReminderModel เข้ามาเพื่อให้สามารถใช้งานได้

class ReminderController extends Controller
{
    public function home()
    {
      //$reminders = DB::table('Reminder')->orderBy('id','desc')->get();
      $reminders = ReminderModel::orderBy('id','desc')->get();
      return view('home',['reminders'=> $reminders]);
    }

    public function addReminder(Request $request) //$request เป็นข้อมูลที่รับค่ามาจาก form
    {
      $reminder = new ReminderModel();//สร้าง Object จาก class ReminderModel
      $reminder->body = $request->reminder;
      $reminder->isFinished = false;
      $reminder->createdUserID = 1;
      $reminder->ReminderType = 1;

      $reminder->save();
      

      /*$body = $request->reminder;
      DB::table('Reminder')->insert(['body'=>$body,'isFinished'=>false,'createdUserID'=>1]);
      */
      return back(); //คือการส่งUserกลับหน้าเดิม
    }

    public function deleteReminder(Request $request)
    {
      $id = $request->id;

      ReminderModel::find($id)->delete();

      //DB::table('Reminder')->where('id',$id)->delete();
      return back()->with('status','Good Job! You finished 1 task');
    }
}
