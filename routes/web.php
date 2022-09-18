<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-php', function() {
    return view('index-php');
});

Route::get('/professional-serch', function() {
    return view('professional_serch');
});

Route::get('/teaser', 'App\Http\Controllers\JbeautyMagoshichi@teaser_page');
Route::get('/index', 'App\Http\Controllers\JbeautyMagoshichi@main_page');
Route::get('/member', 'App\Http\Controllers\JbeautyMagoshichi@member_page');
Route::get('/article', 'App\Http\Controllers\JbeautyMagoshichi@article_page');

// 投稿をコントローラーに送信
Route::post('/newpostsend', 'App\Http\Controllers\FormController@savenew'); 
// 投稿一覧を表示する
Route::get('/view', 'App\Http\Controllers\FormController@view_all');
// リッチテキストエディターページ
Route::get('/create', 'App\Http\Controllers\FormController@wys');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
