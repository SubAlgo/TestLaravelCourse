<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReminderTypeModel extends Model
{
    protected $table = 'ReminderType';
    public $primarykey ="id";
    public $timestamps = false;

    public function reminders()
    {
      return $this->hasMany(ReminderModel::class,'ReminderType','id');
    }
}
