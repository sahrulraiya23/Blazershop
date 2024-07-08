<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TransaksiController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\AlamatPengirimanController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



route::get('/checkout', [CartController::class, 'index']);
route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/', [HomeController::class, 'index']);

route::get('/ourproduct', [HomeController::class, 'ourproduct']);

route::get('/product', [AdminController::class, 'product']);

route::get('/userblog', [AdminController::class, 'userblog']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

route::get('/showproduct', [AdminController::class, 'showproduct']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

route::get('/updateview/{id}', [AdminController::class, 'updateview']);

route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

route::get('/search', [HomeController::class, 'search']);

route::get('/blog', [HomeController::class, 'blog']);

route::get('/uploadblog', [AdminController::class, 'uploadblog']);

route::get('/editblog/{id}', [AdminController::class, 'editblog']);

route::get('/deleteblog/{id}', [AdminController::class, 'deleteblog']);

Route::post('/edit_process', [AdminController::class, 'edit_process']);

route::get('/ourproduct', [HomeController::class, 'ourproduct']);

route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::get('/showcart', [HomeController::class, 'showcart']);

route::get('/delete/{id}', [HomeController::class, 'deletecart']);



route::get('/showorder', [AdminController::class, 'showorder']);

route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

Route::get('/add', function () {
    return view('add');
});
Route::get('/test', [ArtikelController::class, 'show']);
Route::post('/add_process', [ArtikelController::class, 'add_process']);
Route::get('/detail/{id}', [ArtikelController::class, 'detail']);





Route::get('/contact', function () {
    return view('user.contact');
});
