<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\ImageData;
use App\Models\MenuData;
use App\Models\ProfessionalData;
use App\Models\SalonData;
use App\Models\User;

class FormController extends Controller
{
    public function savenew (Request $request){
        $post = new Form;
        $post->title = $request->title;
        $post->main = $request->main;
        $post->save();

        return redirect ('/view'); 
        }

    public function view_all (){
        $data = Form::all();
        return view('post')->with(['data' => $data]);
        }

    public function wys(){
        return view('wysiwyg');
    }

    public function create_salon_info(){
        return view('create_table');
    }

    public function create_menu_info(){
        return view('create_menu_table');
    }

    public function create(Request $request){
        $menu_infos = MenuData::pluck('menu_info');
        return view('create_table', ['menu_infos' => $menu_infos]);
    }

    public function store(Request $request) {
        $menu_id = MenuData::where('menu_info', '=', $request->menu_info)->first();
        // $user_article_max_id = Article::ofUser_Id($user_id)->max('user_article_id');
        // $user_article_id = $user_article_max_id + 1;
        // $category_id = Category::ofCategory_Name($request->category_name)->first()->category_id;
        // $tag_id = Tag::ofTag_Name($request->tag_name)->first()->tag_id; 
        // $article = Article::create([
        //     'user_id' => $user_id,
        //     'user_article_id' => $user_article_id,
        //     'category_id' => $category_id,
        //     'tag_id' => $tag_id
        // ]);

        SalonData::create([
            // 'article_id' => $article->article_id,
            'salon_name' => $request->salon_name,
            'salon_info' => $request->salon_info,
            'salon_category' => $request->category,
            'menu_id' => $menu_id->menu_id,
        ]);
        //記事一覧へリダイレクト
        return redirect('/salon_information');
    }

    public function menu_store(Request $request){
        MenuData::create([
            'menu_info' => $request->menu_info,
        ]);

        return redirect('/salon_information');
    }

    public function test_belongsTo_salon_data(){
        //記事一覧を取得
        $salon_datas = SalonData::all();
        $menu_datas = MenuData::all();
        return view('salon_data_view', ['salon_data' => $salon_datas, 'menu_data' => $menu_datas]);
    }

}
