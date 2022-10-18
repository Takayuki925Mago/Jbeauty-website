<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopManegement;

class ShopManegementController extends Controller
{
    public function s_login() {
        return view('create.s_login');
    }

    public function s_login_rec(Request $request) {
        $shop_id = $request->shop_id;
        $password = $request->password;

            return redirect('/s-menu-list');
        
    }
}
