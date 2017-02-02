<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

  function getProfile()
  {
    return view('profile');
  }

    function getYear(){
      $bYear = 1990;
      $cYear = $bYear+543;

      return $cYear."ปี";

    }

    function getName($id)
    {
      $customers=
      [
        ["Name"=>'Arnon',"SurName"=>'ppp'],
        ["Name"=>'Kornchaval',"SurName"=>'Prathipasen']
      ];
      return $customers[$id-1]['Name'];
    }

    function getSurName($id)
    {
      $customers=
      [
        ["Name"=>'Arnon',"SurName"=>'ppp'],
        ["Name"=>'Kornchaval',"SurName"=>'Prathipasen']
      ];
      return $customers[$id-1]['SurName'];
    }




}
