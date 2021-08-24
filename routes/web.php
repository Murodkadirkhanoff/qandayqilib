<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

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






//Route::group(['middleware' => ['role:moderator']], function () {
//    Route::get('posts-for-verification', [ModeratorController::class, 'forVerification'])->name('posts.for.verification');
//    Route::post('verify', [ModeratorController::class, 'verify'])->name('verify');
//});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::post('/tinymce', function (Request $request) {
    $path = Storage::disk('public_uploads')->put('body', $request->file('file'));
    return response()->json(['location' => "/uploads/$path"]);
})->name('tinymce');



Route::get('/change-locale/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ru', 'uz'])) {
        abort(400);
    }

    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('change.locale');






Route::get('generate-sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/'), '2021-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('/login'), '2021-08-25T20:10:00+02:00', '1.0', 'daily');

    // get all posts from db
    $posts = \App\Models\Post::all();

    // add every post to the sitemap
    foreach ($posts as $post)
    {
        $sitemap->add(URL::to('/post/'.$post->slug) , $post->updated_at, '1.0', 'daily');
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder

    return redirect(url('sitemap.xml'));
});
