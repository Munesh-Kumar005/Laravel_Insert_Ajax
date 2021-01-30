<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Studentdata extends Controller
{
    function form_submit(Request $req){
   
        $student = new student();
        $student ->name = $req->name;
        $student ->password = $req->password;
        $student ->save();
        return ["msg"=>"Data Inserted"];
       

    }
}
