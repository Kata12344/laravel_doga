<?php

use App\Http\Controllers\BasketController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth.basic'])->group(function () {

    Route::apiResource('api/products', ProductController::class);

    Route::apiResource('api/bakets', BasketController::class);
    
    /*VIEW ahol megjeleníthetem az adatokat */ /* Task-ok listázása /task*/
    Route::get('/product/new', [ProductController::class, 'newView']); //új adat felvétele
    /* Task módosítása /task/edit/1 */
    Route::get('/product/edit/{id}', [ProductController::class, 'editView']); // rekord módosítása
    /* Új Task létrehozása /task/create */
    Route::get('/product/list', [ProductController::class, 'listView']);

});
    require __DIR__.'/auth.php';