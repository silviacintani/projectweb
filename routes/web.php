<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'login2']);
Route::post('/auth',[UserController::class, 'authentication']);
Route::get('/home', [HomeController::class, 'showhme']);
// Route::get('/', [HomeController::class, 'logout']);
Route::get('/templat', [HomeController::class, 'templat']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/checkout', [HomeController::class, 'checkout']);



// Route::get('/home', [HomeController::class, 'showuser']);
// Route::post('/user', [HomeController::class, 'searchuser']);
// Route::get('/user/create', [::class,'createuser']);
// Route::post('/user/create', [UserController::class,'adduser']);
// Route::get('/user/edit/{id}', [UserController::class,'edituser']);
// Route::post('/user/update/{id}', [UserController::class,'updateuser']);
// Route::get('/user/delete/{id}', [UserController::class,'deleteuser']);


Route::middleware('status_login')->group(function(){
    Route::get('/index', [ProdukController::class, 'show']);
    Route::get('/produk', [ProdukController::class,'show']);
    Route::post('/search', [ProdukController::class,'search']);
    Route::get('/produk/create', [ProdukController::class,'create']);
    Route::post('/produk/create', [ProdukController::class,'add']);
    Route::get('/produk/edit/{id}', [ProdukController::class,'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class,'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class,'delete']);

    // Route::post('/auth',[UserController::class, 'authentication']);
    Route::get('/showuser', [UserController::class, 'showuser']);
    Route::post('/user', [UserController::class, 'searchuser']);
    Route::get('/user/create', [UserController::class,'createuser']);
    Route::post('/user/create', [UserController::class,'adduser']);
    Route::get('/user/edit/{id}', [UserController::class,'edituser']);
    Route::post('/user/update/{id}', [UserController::class,'updateuser']);
    Route::get('/user/delete/{id}', [UserController::class,'deleteuser']);

    Route::post('/cart/{produk:id}', [KeranjangController::class, 'addchart'])->name('cart.add');
    Route::get("/delete-cart/{id}",[KeranjangController::class,"delete"]);

    Route::get('/transaksi/{id}',[UserController::class, 'transaksi']);
    Route::post('/beli/{id}',[UserController::class, 'buy']);
});