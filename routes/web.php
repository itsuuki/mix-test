<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

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

Auth::routes();

Route::get('/', [ItemController::class, 'index'])->name('item/index');
Route::get('/Item/create', [ItemController::class, 'create']);
Route::get('/Item/{$id}', [ItemController::class, 'show']);
Route::get('/User/{$id}', [UserController::class, 'show']);
Route::get('/User/address', [AddressController::class, 'create']);

// Route::post('/Item', [ItemController::class, 'store']);

// Route::resource('Item', [ItemController::class]);
Route::resource('Item', ItemController::class);
Route::resource('User', UserController::class);
Route::resource('Address', AddressController::class);