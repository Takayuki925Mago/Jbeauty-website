<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JbeautyMagoshichi extends Controller
{
    public function main_page(){
        return view('index');
    }
}
