<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

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

  var $history=[
                  'พ.ศ. 2555 - จบการศึกษา คณะบัญชีและการจัดการ สาขาคอมพิวเตอร์ธุรกิจ',
                  'พ.ศ. 2555 - สมัครรับราชการทหาร [ผลัด1/55 สังกัด: กองร้อยมณฑลทหารบกที่ ๒๓ จังหวัด ขอนแก่น]',
                  'พ.ศ. 2556-ปัจจุบัน - ทำธุรกิจส่วนตัว'
                ];

   var $favorites= [
                    ['คอมพิวเตอร์ และการเขียนโปรแกรม','com'],
                    ['ทำขนม และเบเกอรี่','bakery'],
                    ['อาหารที่ชอบ : อาหารเหนือ โดยเฉพาะข้าวซอย','food']
                  ];


   function __construct()
   {
     $age = date('Y')-1990;
     $this->age = $age;
   }

    function getProfile()
    {

      return view('profile',['eprofile'=>[$this->eprofile]],
                            ['tprofile'=>[$this->tprofile]]
                            //['fav'=>[$this->favorites]]
                            )->with('age',$this->age)
                             ->with('bigo',$this->history)
                             ->with('fav',$this->favorites);

      //return view('profile', $this->eprofile,$this->tprofile);


    }


}
