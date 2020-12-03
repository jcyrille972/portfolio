<?php

use Illuminate\Support\Facades\App;
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
    secure_asset('css/style.css');
    secure_asset('css/app.css');
});
Route::get('about', function(){
    return view('about');
    secure_asset('css/style.css');
    secure_asset('css/app.css');
}); 
Route::get('project', function(){
    secure_asset('css/style.css');
    secure_asset('css/app.css');
    return view('project');
}); 