<?php

use App\Http\Controllers\TagController;
use App\Models\Article;
use App\Models\Article_tag;
use App\Models\Tag;
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
    $articles = Article::all();
    $tags = Tag::all();
    $colors = ['gray', 'red', 'green', 'yellow', 'blue', 'purple', 'indigo', 'pink'];
    // dd($articles[0]->tags->name);
    return view('welcome', compact('articles', 'tags', 'colors'));
});

Route::resource('/tag', TagController::class);
