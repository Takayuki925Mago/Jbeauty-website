<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Professional;
use App\Models\Menu;
use App\Models\Image;
use GuzzleHttp\Handler\Proxy;
use League\CommonMark\Normalizer\SlugNormalizer;

use Illuminate\Support\Facades\Auth;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_salon(Request $request)
    {
        // $salons = Salon::with('categories')->get();
        // return view('index_salon', compact('salons'));

        $salons = Salon::all();
        // $salon_category = Salon::with('categories')->first();
        // $salonsCategories = Salon::find(1);
        $kinds = Category::all();

        return view('salon_shop_serch', compact('salons', 'kinds'));
    }

    public function search(Request $request)
    {
        $salons = Salon::all();
        $query = Salon::query();
        $kinds = Category::all();

        //$request->input()で検索時に入力した項目を取得します。
        $search_salon = $request->shop_salon_search;
        $search_salon_category = $request->shop_salon_category;

        if ($search_salon != '') {
            $posts = Salon::where('salon_name', 'like','%'.$search_salon.'%')->orderBy('created_at','desc')->paginate(5);
        }elseif ($search_salon_category != '') {
            $posts = Salon::whereHas('categories', function($query) use ($search_salon_category) {
            $query->where('name', $search_salon_category);
            })->get();
        }

        $data = $query->paginate(10);

        return view('salon_shop_search_result', compact('salons', 'kinds', 'posts'));
    }

    public function salon_detail($id)
    {
        $menus = Menu::orderBy('updated_at','desc')->paginate(6);
        $professionals = Professional::with('salon')->orderBy('professional_name','desc')->paginate(3);
        $salon = Salon::find($id);

        return view('salon_shop_search_shingle', compact('salon', 'professionals', 'menus'));
    }

    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('salon')->with(['category' => $categories]);
    }

    public function salon_edit () {
        $salons = Salon::where('user_id', Auth::user()->id)->get();

        return view('create.s_salon_list', compact('salons'));
    }

    public function salon_update ($id, Request $request) {
        $salon = Salon::find($id);
        $dir = 'salon';

        if ($request->file('path')){
            $file_name = $request->file('path')->getClientOriginalName();
            $request->file('path')->storeAs('public/' . $dir, $file_name);
            $salon->path = $file_name;
            $salon->path = 'storage/' . $dir . '/' . $file_name;
        }

        if ($request->file('main_image')) {
            // アップロードされたファイル名を取得
            $image_name = $request->file('main_image')->getClientOriginalName();
            // 取得したファイル名で保存
            $request->file('main_image')->storeAs('public/' . $dir, $image_name);
            // ファイル情報をDBに保存
            $salon->main_image = $image_name;
            $salon->image_path = 'storage/' . $dir . '/' . $image_name;
        }

        if ($request->file('sub_image')) {
            $files = $request->file('sub_image');
            foreach($files as $file){
                $new_image = new Image();
                $file_name = $file->getClientOriginalName();
            
                $file->storeAS('public/' . $dir, $file_name);

                $new_image->salon_id = $id;
                $new_image->image = $file_name;
                $new_image->image_path = 'storage/' . $dir . '/' . $file_name;

                $new_image->save();   
            }
        }


        Image::destroy($request->delete_images);
        $salon->categories()->sync($request->category_salon);
        
        $salon->salon_name = $request->salon_name;
        $salon->main_category = $request->main_category;
        $salon->salon_info =$request->salon_info;
        $salon->salon_other = $request->salon_other;
        

        $salon->save();     

        return redirect('/s-salon-list');
    }

    public function s_salon_edit_detail($id)
    {
        $user_id = Auth::user()->id;
        $salon = Salon::find($id);

        if ($user_id != $salon->user_id) {
            return redirect('/s-salon-list');
        }

        $salons = Salon::all();
        $categories = Category::all();

        return view('create.s_salon_edit', compact('salons', 'salon', 'categories'));
    }
}
