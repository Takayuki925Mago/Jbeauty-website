<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Professional;
use App\Models\Image;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Type\NullType;

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
        $menus = Menu::where('user_id', Auth::user()->id)->with('salon', 'images')->get();

        return view('create.s_menu_list', compact('menus'));
    }

    public function menu_update ($id, Request $request) {
        $menu = Menu::find($id);
        $dir = 'menu';

        if ($request->file('main_image')){
            $file_name = $request->file('main_image')->getClientOriginalName();
            $request->file('main_image')->storeAs('public/' . $dir, $file_name);
            $menu->main_image = $file_name;
            $menu->path = 'storage/' . $dir . '/' . $file_name;
        }

        if ($request->file('logo_image')) {
            // アップロードされたファイル名を取得
            $logo_name = $request->file('logo_image')->getClientOriginalName();
            // 取得したファイル名で保存
            $request->file('logo_image')->storeAs('public/' . $dir, $logo_name);
            // ファイル情報をDBに保存
            $menu->logo_image = $logo_name;
            $menu->logo_path = 'storage/' . $dir . '/' . $logo_name;
        }

        if ($request->file('sub_image')) {
            $files = $request->file('sub_image');
            foreach($files as $file){
                $new_image = new Image();
                $file_name = $file->getClientOriginalName();
            
                $file->storeAS('public/' . $dir, $file_name);

                $new_image->menu_id = $id;
                $new_image->image = $file_name;
                $new_image->image_path = 'storage/' . $dir . '/' . $file_name;

                $new_image->save();   
            }
        }


        Image::destroy($request->delete_images);
        $menu->categories()->sync($request->category_menu);
        
        $menu->name = $request->menu_name;
        $menu->category_name = $request->main_category;
        $menu->menu_detail =$request->menu_info;
        $menu->price = $request->menu_price;
        $menu->other = $request->menu_other;
        

        $menu->save();     

        return redirect('/s-menu-list');
    }

    public function s_menu_edit_detail($id)
    {
        $user_id = Auth::user()->id;
        $menu = Menu::find($id);

        if ($user_id != $menu->user_id) {
            return redirect('/s-menu-list');
        }

        $menus = Menu::all();
        $categories = Category::all();
        $professionals = Professional::with('salon')->get();

        return view('create.s_menu_edit', compact('menu', 'professionals', 'menus', 'categories'));
    }
}
