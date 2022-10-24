<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\Product_typeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});




    Route::get('api/products', [ProductController::class, 'index']);
    Route::get('api/products/{item_id}', [ProductController::class, 'show']);
    Route::post('api/products', [ProductController::class, 'store']);
    Route::put('api/products/{id}', [ProductController::class, 'update']);
    Route::delete('api/products/{id}', [ProductController::class, 'destroy']);


    Route::get('api/baskets', [BasketController::class, 'index']);
    Route::get('api/baskets/{item_id}', [BasketController::class, 'show']);
    Route::post('api/baskets', [BasketController::class, 'store']);
    Route::put('api/baskets/{id}', [BasketController::class, 'update']);
    Route::delete('api/baskets/{id}', [BasketController::class, 'destroy']);


    Route::get('api/product_types', [Product_typeController::class, 'index']);
    Route::get('api/product_types/{item_id}', [Product_typeController::class, 'show']);
    Route::post('api/product_types', [Product_typeController::class, 'store']);
    Route::put('api/product_types/{id}', [Product_typeController::class, 'update']);
    Route::delete('api/product_types/{id}', [Product_typeController::class, 'destroy']);



    /* Új Task létrehozása /task/create */
    Route::get('/products/list', [ProductController::class, 'listView']);
    /*VIEW ahol megjeleníthetem az adatokat */ /* Task-ok listázása /task*/
    Route::get('/products/new', [ProductController::class, 'newView']); //új adat felvétele
    /* Task módosítása /task/edit/1 */
    Route::get('/products/edit/{id}', [ProductController::class, 'editView']); // rekord módosítása
    
    
    Route::get('/baskets/list', [BasketController::class, 'listView']);
    /*VIEW ahol megjeleníthetem az adatokat */ /* Task-ok listázása /task*/
    Route::get('/baskets/new', [BasketController::class, 'newView']); //új adat felvétele
    /* Task módosítása /task/edit/1 */
    Route::get('/baskets/edit/{id}', [BasketController::class, 'editView']); // rekord módosítása
    /* Új Task létrehozása /task/create */


    Route::get('/product_types/list', [Product_typeController::class, 'listView']);
    /*VIEW ahol megjeleníthetem az adatokat */ /* Task-ok listázása /task*/
    Route::get('/product_types/new', [Product_typeController::class, 'newView']); //új adat felvétele
    /* Task módosítása /task/edit/1 */
    Route::get('/product_types/edit/{id}', [Product_typeController::class, 'editView']);
    



