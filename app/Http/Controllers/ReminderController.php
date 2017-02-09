<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public hom()
    {
      $reminders = [
        'Buy Milk',
        'Go to Bank',
        'Move Things out'
      ];
      return view('home',['remiders'=> $remiders]);
    }
}
