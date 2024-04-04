<?php

use illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminKeuanganController;
use App\Http\Controllers\AdminKeuanganCreate;
use App\Models\User;
use App\Models\Category;
use App\Models\post_data;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HitunganController;
use App\Charts\DataBulananChart;
use App\Http\Controllers\UserController;
use App\Models\Keuangan;


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

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "title" => "about",
        "name" => "GEREJA SANTO FRANSISKUS XAVERIUS KAMABANIRU",
        "email" => "gerejasantofransiskusxaverius@gmail.com",
        "image" => "logogereja.jpg"
    ]);
});


// halaman BLOG POSTINGAN WEB
// aluranya : ketika ('/blogweb') di klik, maka dia panggil ke kontroler yang nama fungsinya index.
Route::get('/blogweb', [PostController::class, 'index']);


//halaman singel blog
Route::get('blog/{post:slug}', [PostController::class, 'show']);

//semua kategori BLOG
Route::get('/categories', function () {

    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

//halaman Category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post By Category : $category->name",
        'active' => 'category',
        'blog' => $category->blog->load('category', 'user'),
    ]);
});

Route::get('authors/{author:username}', function (User $author) {

    return view('blog', [
        'active' => 'home',
        'title' => "Post By Author : $author->name",
        'blog' => $author->post_data->load('category', 'user'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function (DataBulananChart $chart) {


    $posts = post_data::count();
    $users = User::where('is_admin', '0')->count();
    // $admins = User::where('is_admin','1')->count();
    $pemasukans = Keuangan::sum('pemasukan');
    $pengeluarans = Keuangan::sum('pengeluaran');
    $admins = ($pemasukans) - ($pengeluarans);
    // $data = ['chart' => $chart->build()];
    return view('dashboard.index', compact('posts', 'users', 'admins', 'pemasukans', 'pengeluarans'));
})->middleware('auth');

Route::get('/dashboard', [UserController::class, 'index'])->name('/dashboard.index');

Route::get('list', [HitunganController::class, 'operations']);

// BAGIAN DASHBOARD POST
Route::get('/dashboard/semuapost/checkSlug', [DashboardPostController::class, 'checkSlug'])
    ->middleware('auth');
Route::resource('/dashboard/semuapost', DashboardPostController::class)->middleware('admin'); //fungsi auth, adalah siapapun yang belum login tdk bisa akses ke dalama dashboard
Route::get('/delete/{id}', [DashboardPostController::class, 'delete'])->name('delete');
Route::get('/tampilkandata/{id}', [DashboardPostController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/editdata/{id}', [DashboardPostController::class, 'editdata'])->name('editdata');
Route::post('/updatedata/{id}', [DashboardPostController::class, 'updatedata'])->name('updatedata');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

//KEUANGAN
Route::resource('/dashboard/keuangan', AdminKeuanganController::class)->except('show')->middleware('admin');
Route::get('/tampilkandatakeu/{id}', [AdminKeuanganController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/editdatakeu/{id}', [AdminKeuanganController::class, 'editdata'])->name('editdata');
Route::post('/updatedatakeu/{id}', [AdminKeuanganController::class, 'updatedatakeu'])->name('updatedatakeu');
// Route::get('/Exportfiles/{id}', [AdminKeuanganController::class, 'Exportfiles'])->name('Exportfiles');
//ini untuk tambah data keuangan
Route::resource('/dashboard/createkeuangan', AdminKeuanganCreate::class)->except('show')->middleware('admin');

 















// Route::get('users/{id}', function ($id) {
    
//     return view('',[
//         'title' => "tabel : "
//     ])
// });

// Route::get('/authors/{user}', function(User $user) {

//     return view('authors', [
//         'title' => 'User Post',
//         'blog' => $user->blog
//     ]);
// });

// Route::get('authors/{users}', function(User $user) {

//     return view('authors', [
//         'title' => 'Authors',
//         'blog' => $user::all()
//     ]);
// });