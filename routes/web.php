<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostController;
use App\Http\controllers\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',[PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::post('/posts', [PostController::class, 'store']);

Route::get('/user/index', [UserController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/supporter', [ProfileController::class, 'supporterUpdate'])->name('profile.supporter');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::group(['middleware' => 'auth'], function (){
//     Route::get('/profile', [UserController::class, 'show'])->name('profile');
//     Route::put('/profile/edit', [UserController::class, 'profileUpdate'])->name('profile.edit');
//     Route::put('/password_change', [UserController::class, 'passwordUpdate'])->name('password.edit');
// });

require __DIR__.'/auth.php';
