<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class me extends Controller
{
    var $name = "Kornchaval Prathipasen";
    var $address = "263 M.20 Khamriang";
    var $favorites = [
                        'dog','cat','com'
                      ];

    function getme()
    {
      return view('me') ->with('name',$this->name)
                        ->with('address',$this->address)
                        ->with('fav',$this->favorites);
    }
}
