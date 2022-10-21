<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Professional;
use App\Models\Salon;
use App\Models\Menu;

class ProfessionalController extends Controller
{
    public function index_professioanl(Request $request)
    {
        $kinds = Category::all();
        // $professionals = Professional::with(['salon' => function($query) {
        //     $query->with(['categories']);
        // }])->get();
        $professionals = Professional::with('salon')->get();

        return view('professional_search', compact('kinds', 'professionals'));
    }

    public function professional_detail($id)
    {
        $menus = Menu::all();
        $professional = Professional::find($id);

        return view('professional_search_shingle', compact('professional', 'menus'));
    }

    public function professional_search(Request $request)
    {
        $professionals = Professional::all();
        $query = Professional::query();
        $kinds = Category::all();

        //$request->input()で検索時に入力した項目を取得します。
        $search_professional = $request->professional_search;
        $search_professional_category = $request->professional_category;

        if ($search_professional != '') {
            $posts = Professional::where('professional_name', 'like','%'.$search_professional.'%')->orderBy('created_at','desc')->paginate(5);
        }elseif ($search_professional_category != '') {
            $posts = Professional::whereHas('categories', function($query) use ($search_professional_category) {
            $query->where('name', $search_professional_category);
            })->get();
        }

        $data = $query->paginate(10);

        return view('professional_search_result', compact('professionals', 'kinds', 'posts'));
    }

    public function professional_edit () {
        $professionals = Professional::all();

        return view('create.s_professional_list', compact('professionals'));
    }

    public function s_professional_edit_detail($id)
    {
        $professional = Professional::find($id);
        $menus = Professional::all();
        $categories = Category::all();

        return view('create.s_professional_edit', compact('professional', 'menus', 'categories'));
    }

    public function professional_update ($id, Request $request) {
        $professional = Professional::find($id);
        $dir = 'professional';

        if ($request->file('logo_image')){
            $file_name = $request->file('logo_image')->getClientOriginalName();
            $request->file('logo_image')->storeAs('public/' . $dir, $file_name);
            $professional->professional_image = $file_name;
            $professional->image_path = 'storage/' . $dir . '/' . $file_name;
        }
        
        if ($request->file('main_image')){
            $file_name = $request->file('main_image')->getClientOriginalName();
            $request->file('main_image')->storeAs('public/' . $dir, $file_name);
            $professional->main_image = $file_name;
            $professional->main_path = 'storage/' . $dir . '/' . $file_name;
        }

        $professional->categories()->sync($request->category_menu);

        $professional->professional_name = $request->professional_name;
        $professional->main_category = $request->main_category;
        $professional->diploma =$request->diploma;
        $professional->message = $request->message;
        $professional->professional_instagram = $request->instagram;
        $professional->professional_facebook = $request->facebook;
        $professional->professional_twitter = $request->twitter;
        $professional->professional_tiktok = $request->tiktok;
        $professional->professional_youtube = $request->youtube;

        

        $professional->save();     

        return redirect('/s-professional-list');
    }
}
