<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function(){
    return view('about');
}); 
Route::get('project', function(){
    return view('project');
}); 

Route::group(['prefix' => 'admin'], function () {
    Route::match(['get', 'post'], 'index', [AdminController::class, 'index'])->name('admin.index');
    Route::match(['get', 'post'], 'create', [AdminController::class, 'create'])->name('admin.create');
    Route::group(['prefix' => 'delete'], function () {
        Route::match(['get', 'post'], '{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    });
});