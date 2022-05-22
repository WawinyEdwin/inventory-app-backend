<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

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

// Route::resource('inventories', InventoryController::class);
Route::get('/inventories',[InventoryController::class, 'index'])->name('inventory');
Route::get('/inventories/create',[InventoryController::class, 'create'])->name('create');
Route::post('/inventories/store',[InventoryController::class, 'store'])->name('store');
Route::get('/inventories/show/{id}',[InventoryController::class, 'show'])->name('show');
Route::get('/inventories/edit/{id}',[InventoryController::class, 'edit'])->name('edit');
Route::post('/inventories/update/{id}',[InventoryController::class, 'update'])->name('update');
Route::delete('/inventories/delete/{id}',[InventoryController::class, 'destroy'])->name('delete');
