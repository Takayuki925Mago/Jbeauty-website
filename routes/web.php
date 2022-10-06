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

Route::get('/floor-guide', function() {
    return view('floor_guide');
});

Route::get('', 'App\Http\Controllers\JbeautyMagoshichi@teaser_page');
Route::get('/index', 'App\Http\Controllers\JbeautyMagoshichi@main_page');
Route::get('/member', 'App\Http\Controllers\JbeautyMagoshichi@member_page');
Route::get('/article', 'App\Http\Controllers\JbeautyMagoshichi@article_page');

Route::get('/salon-shop-search', 'App\Http\Controllers\SalonController@index_salon');
Route::get('/salon-shop-search=salon{id}', 'App\Http\Controllers\SalonController@salon_detail')->name('salon_detail');
Route::get('/professional-search', 'App\Http\Controllers\ProfessionalController@index_professioanl');
Route::get('/professional-search=professional{id}', 'App\Http\Controllers\ProfessionalController@professional_detail')->name('professional_detail');
Route::get('/menu-search', 'App\Http\Controllers\MenuController@index_menu');

//検索ボタンを押すとコントローラのindexメソッドを実行します
Route::get('search','App\Http\Controllers\SalonController@search')->name('search');
Route::get('professional_search','App\Http\Controllers\ProfessionalController@professional_search')->name('professional_search');
Route::get('menu_search','App\Http\Controllers\MenuController@menu_search')->name('menu_search');

Route::get('/salon-create', 'App\Http\Controllers\FormController@salon_create');
Route::post('salon_store', 'App\Http\Controllers\FormController@salon_store');
Route::get('/salon-category-create', 'App\Http\Controllers\FormController@salon_category_create');
Route::post('salon_category_store', 'App\Http\Controllers\FormController@salon_category_store');