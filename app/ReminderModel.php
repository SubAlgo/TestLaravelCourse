<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReminderModel extends Model
{
    protected $table = "Reminder"; //บรรทัดนี้ไม่จำเป็นต้องเขียนก็ได้ ถ้าชื่อ Class ของเราคือ Reminder
    public $primarykey ="id";
    public $timestamp = true; //ละได้เหมือนกัน

}
