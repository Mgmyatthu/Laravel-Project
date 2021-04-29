<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MyuserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

Use App\Models\Post;
Use App\Models\Category;


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

   
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'store'])->name('contact');


Route::get('/gallary',[PostController::class, 'gallary'])->name('gallary');


//WebDesign Post
Route::get('/post_create',[PostController::class, 'create'])->name('post_create');
Route::post('/post_create',[PostController::class, 'store'])->name('p_store');
Route::get('/show/{id}',[PostController::class, 'show'])->name('show');


//WebDesign categrory
Route::get('/category_index',[CategoryController::class, 'index'])->name('categoryindex');
Route::get('/category_create',[CategoryController::class, 'create'])->name('category_create');
Route::post('/category_create',[CategoryController::class, 'store'])->name('category_store');



//WebDesign myuser
Route::get('/myuser_index',[MyuserController::class, 'index'])->name('myuser_index');
Route::get('/myuser_create',[MyuserController::class, 'create'])->name('myuser_create');
Route::post('/myuser_create',[MyuserController::class, 'store'])->name('myuser_store');