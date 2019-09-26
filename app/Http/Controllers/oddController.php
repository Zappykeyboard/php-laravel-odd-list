<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oddController extends Controller
{
    function showOddPage(){

        return view('odd');
    }
}
