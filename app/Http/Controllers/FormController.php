<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\ImageData;
use App\Models\MenuData;
use App\Models\ProfessionalData;
use App\Models\SalonData;
use App\Models\User;
use App\Models\Salon;
use App\Models\Category;

class FormController extends Controller
{
    public function salon_create()
    {
        return view('salon_create');
    }

    public function salon_category_create()
    {
        $salons = Salon::all();
        $categories = Category::all();
        return view('salon_category_create', compact('categories', 'salons'));
    }

    public function salon_store(Request $request)
    {
        Salon::create([
            'salon_name' => $request->salon_name,
            'salon_info' => $request->salon_info,
            'salon_other' => $request->salon_other,
            'salon_instagram' => $request->salon_insta,
            'salon_facebook' => $request->salon_facebook,
            'salon_twitter' => $request->salon_twitter,
            'salon_tiktok' => $request->salon_tiktok,
            'salon_youtube' => $request->salon_youtube,
            'other'=> $request->other,
            'salon_logo' => $request->salon_logo,
        ]);

        return redirect('salon-shop-search');
    }

    public function salon_category_store(Request $request)
    {
        $salon = new Salon();

        $category_id = $request->category_id;
        $salon_id = $request->salon_id;

        $salon->categories()->attach(
            ['category_id' => $category_id],
            ['salon_id' => $salon_id],
        );

        return redirect('salon-shop-search');
    }

    // public function savenew (Request $request){
    //     $post = new Form;
    //     $post->title = $request->title;
    //     $post->main = $request->main;
    //     $post->save();

    //     return redirect ('/view'); 
    //     }

    // public function view_all (){
    //     $data = Form::all();
    //     return view('post')->with(['data' => $data]);
    //     }

    // public function wys(){
    //     return view('wysiwyg');
    // }

    // public function test_belongsTo_salon_data(){
    //     //記事一覧を取得
    //     $salon_datas = SalonData::all();
    //     $menu_datas = MenuData::all();
    //     return view('salon_data_view', ['salon_data' => $salon_datas, 'menu_data' => $menu_datas]);
    // }

    // public function create_salon_info(){
    //     return view('create_table');
    // }

    // public function create(Request $request){
    //     $salon_names = SalonData::pluck('salon_name');
    //     return view('create_menu_table', ['salon_names' => $salon_names]);
    // }

    // public function menu_store(Request $request){
    //     // $salon_id = SalonData::ofSalon_Name($request->salon_name)->first()->salon_id;
    //     $salon_id = SalonData::where('salon_name', '=', $request->salon_name)->first();

    //     MenuData::create([
    //         'menu_info' => $request->menu_info,
    //         'salon_id' => $salon_id->salon_id,
    //     ]);

    //     return redirect('/salon_information');
    // }

    // public function store(Request $request) {
    //     // $menu_id = MenuData::where('menu_info', '=', $request->menu_info)->first();
    //     // $user_article_max_id = Article::ofUser_Id($user_id)->max('user_article_id');
    //     // $user_article_id = $user_article_max_id + 1;
    //     // $category_id = Category::ofCategory_Name($request->category_name)->first()->category_id;
    //     // $tag_id = Tag::ofTag_Name($request->tag_name)->first()->tag_id; 
    //     // $article = Article::create([
    //     //     'user_id' => $user_id,
    //     //     'user_article_id' => $user_article_id,
    //     //     'category_id' => $category_id,
    //     //     'tag_id' => $tag_id
    //     // ]);

    //     SalonData::create([
    //         // 'article_id' => $article->article_id,
    //         'salon_name' => $request->salon_name,
    //         'salon_info' => $request->salon_info,
    //         'salon_category' => $request->category,
    //     ]);
    //     //記事一覧へリダイレクト
    //     return redirect('/salon_information');
    // }

}
