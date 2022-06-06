<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
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

//Auth
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'register'])->name('register');

Route::post('postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::post('postRegister', [RegisterController::class, 'postRegister'])->name('postRegister');

Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::group(['middleware' => ['auth', 'rolecheck:admin,user']], function(){
    Route::get('index', [HomeController::class, 'index'])->name('index');
});
//endAuth

//aplikasi admin
Route::get('index', [BarangController::class, 'index']);
Route::get('inputBarang', [BarangController::class, 'inputBarang'])->name('inputBarang');
Route::post('store', [BarangController::class, 'store'])->name('store');
Route::get('gudang', [BarangController::class, 'gudang'])->name('gudang');
Route::post('/update/{id}', [BarangController::class, 'update'])->name('update');
Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('edit');

Route::get('/destroy/{id}', [BarangController::class, 'destroy']);
Route::get('trash', [BarangController::class, 'trash'])->name('trash');
Route::get('/restore/{id}', [BarangController::class, 'restore']);
Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('delete');

//aplikasi user
Route::get('pinjam', [UserController::class, 'pinjam'])->name('pinjam');
Route::get('/pinjam', [UserController::class, 'postPinjam'])->name('pinjam');
Route::get('kelolaUser', [UserController::class, 'kelolaUser'])->name('kelolaUser');
