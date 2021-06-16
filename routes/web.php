<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
//Rutas de producto
Route::get('/viewProduct/',[ProductController::class, 'viewProduct']);
Route::get('/shoppingCart/',[ProductController::class, 'shoppingCart']);
Route::get('/addShoppingCart/{id}',[ProductController::class, 'addShoppingCart']);
Route::get('/saleHistory/', [ProductController::class, 'saleHistory']);
Route::post('/finishSale/', [ProductController::class, 'finishSale']);

//Rutas del cliente
Route::get('/selectClient/',[ClientController::class, 'selectClient']);
Route::get('/selectedClient/{id}',[ClientController::class, 'selectedClient']);