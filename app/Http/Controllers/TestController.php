<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function person($name)
    {
        echo $name;
    }
    public function phone($phone)
    {
        echo $phone;
        return view('person',['data'=>$phone]);
    }
}
