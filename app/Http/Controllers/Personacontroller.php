<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Personacontroller extends Controller
{
    function mostrarform($id=null){
        if($id==""){
            return"debe pasar un id";
        }
        return "Form id:".$id;
    }
   
}
