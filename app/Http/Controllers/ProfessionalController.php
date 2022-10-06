<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Professional;
use App\Models\Salon;

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
        $professional = Professional::find($id);

        return view('professional_search_shingle', compact('professional'));
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
}
