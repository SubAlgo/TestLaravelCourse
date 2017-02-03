<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  var $Amily=['Name'=>'Amily','SurName'=>'Calvinus','Clan'=>'Vimp'];
  var  $eprofile=[
                'name'=>'Kornchaval',
                'surname'=>'Prathipasen',
                'brithday'=>'5 July 1990 '
              ];

  var  $tprofile=[
                'name'=>'กรชวัล',
                'surname'=>'ประทีปเสน',
                'brithday'=>'5 กรกฎาคม พ.ศ. 2533 '
              ];


   var  $age=10 ;

   function __construct()
   {
     $age = date('Y')-1990;
     $this->age = $age;
   }

    function getProfile()
    {
      //return view('profile',['dbprofile'=>[$eprofile,$tprofile,$age]]);
      //return view('profile',['dbProfile'=>[$Amily,$Kornchaval]]);
      return view('profile',['eprofile'=>[$this->eprofile]],
                            ['tprofile'=>[$this->tprofile]]
                            )->with('age',$this->age);

      //return view('profile', $this->eprofile,$this->tprofile);


    }


}
