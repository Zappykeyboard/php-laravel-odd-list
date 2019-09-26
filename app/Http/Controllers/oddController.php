<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oddController extends Controller
{
    function showOddPage(){

        $oddNumbers = [];

        for ($i=10; $i < 101; $i++) { 
            
            if ($i % 2 !== 0){
                $oddNumbers[] = $i;
            }
        }

        return view('odd', compact('oddNumbers'));
    }
}
