<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Salon;
use League\CommonMark\Normalizer\SlugNormalizer;

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
        $salon = Salon::find($id);

        return view('salon_shop_search_shingle', compact('salon'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}