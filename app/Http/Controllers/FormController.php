<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function postpage (Request $request){
        return view ('form');
       }
       
    public function savenew (Request $request){
        $post = new Form;
        $post->title = $request->title;
        $post->main = $request->main;
        $post->save();

        return redirect ('/view'); 
        }

    public function view_all (Request $request){
        $data = Form::all();
        return view('post')->with(['data' => $data]);
        }

    public function wys(){
        return view('wysiwyg');
    }
}
