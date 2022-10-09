<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Professional;
use App\Models\Salon;
use App\Models\Menu;

class JbeautyMagoshichi extends Controller
{
    public function teaser_page(){
        return view('teaser');
    }

    public function main_page(){

        $kinds = Category::all();
        $salons = Salon::all();
        $professionals = Professional::all();
        $menus = Menu::all();

        return view('index', compact('kinds', 'salons', 'professionals', 'menus'));
    }

    public function member_page(){
        return view('membership');
    }

    public function article_page(){
        return view('article_detail');
    }
    
}
