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
            $posts = Menu::where('name', 'like','%'.$search_menu.'%')->orWhere('salon_name', 'like','%'.$search_menu.'%')->orderBy('created_at','desc')->paginate(5);
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
        $menus = Menu::all();
        $professionals = Professional::with('salon')->get();

        return view('menu_search_shingle', compact('menu', 'professionals', 'menus'));
    }

    public function menu_edit () {
        $menus = Menu::with('salon')->get();

        return view('create.s_menu_list', compact('menus'));
    }

    public function menu_update ($id, Request $request) {
        $menu = Menu::find($id);
        $dir = 'menu';
        // $uploadImg = $request->main_image;
        // if($uploadImg->isValid()) {
        //     $filePath = $uploadImg->store('public');
        //     $menu->main_image = str_replace('public/', '', $filePath);
        // }
        // $menu->save();

        // アップロードされたファイル名を取得
        $file_name = $request->file('main_image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('main_image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $menu->main_image = $file_name;
        $menu->path = 'storage/' . $dir . '/' . $file_name;
        $menu->save();

        return redirect('/s-menu-list');
    }

    public function s_menu_edit_detail($id)
    {
        $menu = Menu::find($id);
        $menus = Menu::all();
        $professionals = Professional::with('salon')->get();

        return view('create.s_menu_edit', compact('menu', 'professionals', 'menus'));
    }
}
