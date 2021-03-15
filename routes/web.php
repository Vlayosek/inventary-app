<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/*Route::resource('area',AreaController::class)->name('admin.area');
Route::resource('article',ArticleController::class)->name('admin.article');
Route::resource('category',CategoryController::class)->name('admin.category');
Route::resource('marca',MarcaController::class)->name('admin.marca');
Route::resource('modelo',ModeloController::class)->name('admin.modelo');
Route::resource('product',ProductController::class)->name('admin.product');
Route::resource('type',TypeController::class)->name('admin.type');
Route::resource('user',UserController::class)->name('admin.user');*/

