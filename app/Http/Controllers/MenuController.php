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

    public function menu_search(Request $request)
    {
        $menus = Menu::all();
        $query = Menu::query();
        $kinds = Category::all();

        //$request->input()で検索時に入力した項目を取得します。
        $search_menu = $request->menu_search;
        $search_menu_category = $request->menu_category;

        if ($search_menu != '') {
            $posts = Menu::where('name', 'like','%'.$search_menu.'%')->orderBy('created_at','desc')->paginate(5);
        }elseif ($search_menu_category != '') {
            $posts = Menu::whereHas('categories', function($query) use ($search_menu_category) {
            $query->where('name', $search_menu_category);
            })->get();
        }

        $data = $query->paginate(10);

        return view('menu_search_result', compact('menus', 'kinds', 'posts'));
    }

    public function menu_detail($id)
    {
        $menu = Menu::find($id);

        return view('menu_search_shingle', compact('menu'));
    }
}
