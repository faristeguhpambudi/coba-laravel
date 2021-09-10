<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Faris Teguh Pambudi",
        "email" => "faristeguhpambudi@gmail.com"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//Halamana Categories
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'posts' => $category->posts->load('category', 'author'),
//         'category' => $category->name,
//     ]);
// });

Route::get('/categories', function () {
    return view('categories', [
        "title" => "All Categories",
        "categories" => Category::all()
    ]);
});

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
