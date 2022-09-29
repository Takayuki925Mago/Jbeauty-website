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
}
