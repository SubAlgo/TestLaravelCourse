<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReminderTypeModel;

class ReminderTypeController extends Controller
{
    public function addReminderType (Request $request)
    {
      $typeName = $request->name;

      $reminderType = new ReminderTypeModel();
      $reminderType->typename = $typeName;

      $reminderType->save();

      return back();
    }
}
