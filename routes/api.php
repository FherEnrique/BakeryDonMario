<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return 'Hola Mundo';
});

Route::post('/products/',[ProductController::class, 'store'])->name('products.store');
Route::post('/products/{id}', [ProductController::class, 'update']);

Route::prefix('/clients')->group(function () {
    Route::post('/', [ClientController::class, 'store']);
    Route::post('/{client}', [ClientController::class, 'update']);
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/info', [UserController::class, 'infoUser']);
