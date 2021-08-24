<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\StaticController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Front\PageController;

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

Route::get('/', [PageController::class, 'homePage'])->name('home.page');
Route::get('/login-page', [PageController::class, 'loginPage'])->name('login.page');
//Route::get('/register-page', [StaticController::class, 'registerPage'])->name('register.page');


Route::get('/posts-list', [PostController::class, 'postsListPage'])->name('posts.list.page');
Route::get('/post/{slug}', [PostController::class, 'singlePost'])->name('single.post');
Route::get('/posts/{category_slug}', [PostController::class, 'postsByCategory'])->name('posts.by.category');


Route::prefix('account')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\Account\AccountController::class, 'account'])->name('account');
    Route::resource('posts', \App\Http\Controllers\Front\Account\PostController::class);
});

Route::group(['middleware' => ['role:moderator']], function () {
    Route::get('posts-for-verification', [\App\Http\Controllers\Front\ModeratorController::class, 'forVerification'])->name('posts.for.verification');
    Route::post('verify', [\App\Http\Controllers\Front\ModeratorController::class, 'verify'])->name('verify');
});


