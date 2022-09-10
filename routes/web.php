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

Route::get('/teaser', 'App\Http\Controllers\JbeautyMagoshichi@teaser_page');
Route::get('/index', 'App\Http\Controllers\JbeautyMagoshichi@main_page');
Route::get('/member', 'App\Http\Controllers\JbeautyMagoshichi@member_page');
Route::get('/article', 'App\Http\Controllers\JbeautyMagoshichi@article_page');
