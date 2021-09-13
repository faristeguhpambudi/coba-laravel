<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostControler;

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


//untuk ke halaman login dengan menjalankan middleware dulu, hanya bisa diakses oleh belum autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
//untuk logout
Route::post('/logout', [LoginController::class, 'logout']);
//untuk ke halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//untuk daftar method post
Route::post('/register', [RegisterController::class, 'store']);
//untuk login
Route::post('/login', [LoginController::class, 'authenticate']);

//berhasil login
Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware('auth');


//untuk pengelolaan/dashboard posts controller
Route::resource('/dashboard/posts', DashboardPostControler::class)->middleware('auth');


// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
