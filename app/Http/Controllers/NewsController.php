<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class NewsController extends Controller
{
    public function index_news(Request $request)
    {
        $kinds = Category::all();

        return view('news_search', compact('kinds'));
    }

    public function store_information()
    {
        return view('store_information');
    }
}
