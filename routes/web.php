<?php

use App\Helpers\Custome;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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


Route::resource('/posts', PostController::class);


Route::get('/test', function () {
    //return view('welcome');
    // $array = 'abd';
    // $output = Arr::accessible($array);

    //$array = ['name'=> 'desk'];
    //$output = Arr::add($array, 'price', 100);

    // $array = [[1,2],[3,4],[5,6]];
    // $output = Arr::collapse($array);

    //$output = Arr::crossJoin([1, 2], ['a', 'b']);

    //$output = Arr::crossJoin([1, 2], ['a', 'b'],['i', 'ii']);

    //$output = Arr::divide(['name' => 'Desk']);

    // $array = ['products' => ['desk' => ['price' => 100]]];
    // $output = Arr::dot($array);

    // $array = ['name' => 'Desk', 'price' => 100];
    // $output = Arr::except($array, ['price']);

    // $array = ['name' => 'John Doe', 'age' => 17];
    // $output = Arr::exists($array, 'salary');

    // $array = [100, 200, 300];
    // $first = Arr::first($array, function (int $value, int $key) {
    //     return $value <= 170;
    // });

    // $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];
    // $flattened = Arr::flatten($array);

//     $array = ['first' => 'james', 'last' => 'kirk'];
//     $mapped = Arr::map($array, function (string $value, string $key) {
//     return ucfirst($value);
// });

    // $array = [
    //     [
    //         'name' => 'John',
    //         'department' => 'Sales',
    //         'email' => 'john@example.com',
    //     ],
    //     [
    //         'name' => 'Jane',
    //         'department' => 'Marketing',
    //         'email' => 'jane@example.com',
    //     ]
    // ];
    
    // $mapped = Arr::mapWithKeys($array, function (array $item, int $key) {
    //     return [$item['email'] => $item['name']];
    // });

    $array = ['name' => 'Desk', 'price' => 100];
    $name = Arr::pull($array, 'name');
    echo "<pre>";
    print_r($name);
    echo "</pre>";


});