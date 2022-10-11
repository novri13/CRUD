<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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


Route::get('/', [BukuController::class, 'index']);
Route::get('/create', [BukuController::class, 'create']);
Route::post('/store', [BukuController::class, 'store']);
Route::get('/show/{id}', [BukuController::class, 'show']);
Route::post('/update/{id}', [BukuController::class, 'update']);
Route::get('/destroy/{id}', [BukuController::class, 'destroy']);
