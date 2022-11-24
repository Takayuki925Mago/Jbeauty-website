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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/s-menu-list', function () {
//         return view('create.s_menu_list');
//     })->name('s-menu-list');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/s-salon-list', function () {
        return view('s_salon_list');
    })->name('s-salon-list');
    Route::get('/s-salon-list', 'App\Http\Controllers\SalonController@salon_edit')->name('s-salon-list');
    Route::get('/s-menu-list', 'App\Http\Controllers\MenuController@menu_edit');
    Route::get('/s-professional-list', 'App\Http\Controllers\ProfessionalController@professional_edit');
    Route::get('/s-menu-edit=menu{id}', 'App\Http\Controllers\MenuController@s_menu_edit_detail')->name('s_menu_edit_detail');
    Route::post('menu_update{id}', 'App\Http\Controllers\MenuController@menu_update')->name('menu_update');
    Route::post('menu_add', 'App\Http\Controllers\MenuController@menu_add')->name('menu_add');
    Route::post('professional_add', 'App\Http\Controllers\ProfessionalController@professional_add')->name('professional_add');
    Route::delete('professional_delete{id}', 'App\Http\Controllers\ProfessionalController@professional_delete')->name('professional_delete');
    Route::delete('menu_delete{id}', 'App\Http\Controllers\MenuController@menu_delete')->name('menu_delete');
    Route::get('/s-professional-edit=professional{id}', 'App\Http\Controllers\ProfessionalController@s_professional_edit_detail')->name('s_professional_edit_detail');
    Route::post('professional_update{id}', 'App\Http\Controllers\ProfessionalController@professional_update')->name('professional_update');
    Route::get('/s-salon-edit=salon{id}', 'App\Http\Controllers\SalonController@s_salon_edit_detail')->name('s_salon_edit_detail');
    Route::post('salon_update{id}', 'App\Http\Controllers\SalonController@salon_update')->name('salon_update');
});

Route::get('/floor-guide', function() {
    return view('floor_guide');
});

Route::get('/service', function() {
    return view('service');
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
Route::get('/menu-search=menu{id}', 'App\Http\Controllers\MenuController@menu_detail')->name('menu_detail');
Route::get('/news-search', 'App\Http\Controllers\NewsController@index_news');
Route::get('/store-information', 'App\Http\Controllers\NewsController@store_information');

//検索ボタンを押すとコントローラのindexメソッドを実行します
Route::get('search','App\Http\Controllers\SalonController@search')->name('search');
Route::get('professional_search','App\Http\Controllers\ProfessionalController@professional_search')->name('professional_search');
Route::get('menu_search','App\Http\Controllers\MenuController@menu_search')->name('menu_search');

Route::get('/salon-create', 'App\Http\Controllers\FormController@salon_create');
Route::post('salon_store', 'App\Http\Controllers\FormController@salon_store');
Route::get('/salon-category-create', 'App\Http\Controllers\FormController@salon_category_create');
Route::post('salon_category_store', 'App\Http\Controllers\FormController@salon_category_store');

Route::get('/s-login', 'App\Http\Controllers\ShopManegementController@s_login');
Route::post('s_login', 'App\Http\Controllers\ShopManegementController@s_login_rec')->name('s_login');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
