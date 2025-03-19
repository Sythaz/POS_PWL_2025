<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // <enampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);          // <enampilkan halaman awal user
    Route::post('/list', [LevelController::class, 'list']);      // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [LevelController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data user
});

Route::get('/category', [CategoryController::class, 'showCategory'])->name('category.showCategory');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [CategoryController::class, 'showFoodBeverage'])->name('category.foodBeverage');
    Route::get('/beauty-health', [CategoryController::class, 'showBeautyHealth'])->name('category.beautyHealth');
    Route::get('/home-care', [CategoryController::class, 'showHomeCare'])->name('category.homeCare');
    Route::get('/baby-kid', [CategoryController::class, 'showBabyKid'])->name('category.babyKid');
});

Route::get('/user/{id?}/name/{name?}', [UserController::class, 'showUser',])->name('user.showUser');

Route::get('/transaction', [TransactionController::class, 'showTransaction'])->name('transaction.showTransaction');

Route::get('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);