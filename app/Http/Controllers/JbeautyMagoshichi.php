<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JbeautyMagoshichi extends Controller
{
    public function main_page(){
        return view('index');
    }

    public function member_page(){
        return view('membership');
    }

    public function article_page(){
        return view('article_detail');
    }
    
}
