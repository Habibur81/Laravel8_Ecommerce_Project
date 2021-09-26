<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// HomeController Route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/ ', [HomeController::class, 'index']);

Route::get('/home ', [HomeController::class, 'index']);

Route::get('/search', [HomeController::class, 'search']);

Route::get('/ourproduct', [HomeController::class, 'ourproduct']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

Route::post('/order', [HomeController::class, 'confirmorder']);



// AdminController Route
Route::get('/product ', [AdminController::class, 'product']);

Route::post('/pro_insert', [AdminController::class, 'pro_insert']);

Route::get('/showproduct ', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/update/{id}', [AdminController::class, 'update']);

Route::post('/product_upload/{id}', [AdminController::class, 'product_upload']);

Route::get('/showorder', [AdminController::class, 'showorder']);

Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

