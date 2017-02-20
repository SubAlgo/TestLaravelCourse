<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReminderTypeModel;


class ReminderTypeController extends Controller
{
    public function addReminderType (Request $request)
    {
      //$validator = Validator::make($request->all(), ['name' =>'request|uniques:ReminderType']);

      //Validate typename ถ้ามีข้อมูลซ้ำจะไม่ถูกบันทึกซ้ำ
      //ตรวจสอบ name ที่ถูกส่งค่ามาจาก form โดยตรวจจาก ฟิว typename ของ Table ReminderType 
      $this->validate($request,[
        'name'=> 'required|unique:ReminderType,typename'
      ]);

      $typeName = $request->name;

      $reminderType = new ReminderTypeModel();
      $reminderType->typename = $typeName;

      $reminderType->save();

      return back();
    }
}
