<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GithubController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


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
    return view('hello', [
        'name'=>$name,
    ]);
});
# excute action method from controller
# 1-> show all blogs in table
Route::get('/posts', [PostController::class,'index'])->name('posts.index')->middleware('auth');
# 2-> show create form
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create')->middleware('auth');
# 3->submition هيستقبل ال
Route::post('/posts', [PostController::class,'store'])->name('posts.store')->middleware('auth');
# 4-> اظهر حد معين
Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show')->middleware('auth');

Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit')->middleware('auth');

Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update')->middleware('auth');


Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect',[GithubController::class,'redirect'])->name('auth.github');
Route::get('/auth/callback',[GithubController::class,'callback']);

// # 1- redirect and open github link
// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// })->name('auth.github');

// Route::get('/auth/callback', function () {
//     $githubUser = Socialite::driver('github')->user();
//     // dd($githubUser);
//     $user = User::where('github_id', $githubUser->id)->first();
//     if ($user) {
//         $user->update([
//             'github_token' => $githubUser->token,
//             'github_refresh_token' => $githubUser->refreshToken,
//         ]);
//     } else {
//         $user = User::create([
//             'name' => $githubUser->name,
//             'email' => $githubUser->email,
//             'password' => $githubUser->token,
//             'github_id' => $githubUser->id,
//             'github_token' => $githubUser->token,
//             'github_refresh_token' => $githubUser->refreshToken,
//         ]);
//     }

//     Auth::login($user);

//     return redirect('/posts');
// });
