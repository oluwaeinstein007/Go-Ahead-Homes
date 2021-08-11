<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/testify', function(){
    if (Auth::user()){
        return view('testify');
    } else{
        return ('unauthorized');
    }
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/first', function(){
    return view('first');
});
Route::get('/covid', function(){
    return view('covid');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/services', function(){
    return view('services');
});
Route::get('/testimonials', function(){
    
    return view('testimonials');
});
Route::get('/news/{id}', [NewsController::class, 'single'])->name('news.single');
Route::get('/news', [NewsController::class, 'index'])->name('news');