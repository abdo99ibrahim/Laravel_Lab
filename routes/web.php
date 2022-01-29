<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/hello', function () {
    $name = 'Esam';
    # view ('url parameter',array [key => value])
    return view('hello',[
        'name'=>$name,
    ]);
});
# excute action method from controller
# 1-> show all blogs in table
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
# 2-> show create form
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
# 3->submition هيستقبل ال
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
# 4-> اظهر حد معين
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');;
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');

Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');

Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
