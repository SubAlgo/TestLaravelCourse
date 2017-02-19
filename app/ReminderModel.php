<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReminderModel extends Model
{
  use SoftDeletes;
    protected $table = "Reminder"; //บรรทัดนี้ไม่จำเป็นต้องเขียนก็ได้ ถ้าชื่อ Class ของเราคือ Reminder
    public $primarykey ="id";
    public $timestamp = true; //ละได้เหมือนกัน

    public function type()
    {
      return $this->belongsTo(ReminderTypeModel::class,'ReminderType','id');
    }

}
