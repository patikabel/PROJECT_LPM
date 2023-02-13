<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;

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

// Route::get('#', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });

Route::get('home', [HomeController::class, 'home']);
Route::post('data', [HomeController::class, 'actiondata']);
Route::get('/', [HomeController::class, 'tampilan']);
Route::get('dashboard', [HomeController::class, 'dashboard']);
Route::get('laporan', [HomeController::class, 'laporan']);
Route::get('petugas', [HomeController::class, 'petugas'])->middleware('auth');




Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('datalogin', [LoginController::class, 'datalogin'])->name('datalogin');

Route::get('register', [LoginController::class, 'register']);
Route::post('register', [LoginController::class, 'masuk']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('create', [CrudController::class, 'create'])->middleware('auth');
Route::post('create', [CrudController::class, 'store']);

Route::get('/dashboard/delete/{id}', [CrudController::class, 'delete'])->middleware('auth');
Route::get('/dashboard/petugas/delete/{id}', [CrudController::class, 'deletePetugas'])->middleware('auth');

Route::POST('/admin/register', [CrudController::class, 'buatPetugas'])->middleware('auth');
// Route::get('/dashboard/edit/{id}' , [CrudController::class, 'edit'])->middleware('auth');
// Route::post('/dashboard/edit/{id}', [CrudController::class, 'update'])->middleware('auth');
Route::get('detail/{id}', [CrudController::class, 'detail'])->middleware('auth');
