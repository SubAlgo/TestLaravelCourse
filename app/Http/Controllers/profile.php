<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
  var $myprofile =
  [
    [
      'Name'=> 'Kornchaval',
      'SurName'=> 'Prathipasen',
      'Dbrithday'=> '5',
      'Mbrithday'=> 'July',
      'Ybrithday'=> 2533
    ]
  ];

    function getname ()
    {
        return 'ชื่อ: '. $this->myprofile['0']['Name'];
    }

    function getsurname()
    {
        return 'นามสกุล: '. $this->myprofile['0']['SurName'];
    }

    function getbrithday()
    {
        return 'วันเกิด: ' .
                'วันที่ '. $this->myprofile['0']['Dbrithday'].
                ' เดือน '. $this->myprofile['0']['Mbrithday'].
                ' พ.ศ. '. $this->myprofile['0']['Ybrithday'];
    }

    function getage()
    {
      $cYear = $this->myprofile['0']['Ybrithday']-543;
      $age = date('Y')-$cYear;

      return $age;
    }
}
