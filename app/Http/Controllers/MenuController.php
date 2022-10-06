<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Professional;
use App\Models\Salon;

class MenuController extends Controller
{
    public function index_menu(Request $request)
    {
        $kinds = Category::all();
        $menus = Menu::with('salon')->get();
        // $professionals = Professional::with('salon')->get();

        return view('menu_search', compact('kinds', 'menus'));
    }
}
