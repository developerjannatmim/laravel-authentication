<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/**********************Authentication *************************/


/**********************Authentication *************************/








/********************** Authentication Breeze package *************************/
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);

// Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';
/********************** Authentication Breeze package *************************/

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/shop', [MainController::class, 'shop']);
Route::get('/single', [MainController::class, 'singlePage']);
Route::get('/register', [MainController::class, 'ragister']);
Route::post('/registerUser', [MainController::class, 'registerUser'])->name('main.register');
Route::get('/login', [MainController::class, 'login']);
Route::post('/loginUser', [MainController::class, 'loginUser'])->name('main.login');
Route::get('/logout', [MainController::class, 'logout']);

