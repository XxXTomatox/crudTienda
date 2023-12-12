<?php

use App\Http\Controllers\categoriasController;
use App\Http\Controllers\productosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(categoriasController::class)->group(function (){
    route::get('categorias','index')->name('categorias.index');
    route::get('categorias/create','create')->name('categorias.create');
    route::get('categorias/{categorias}/edit')->name('categorias.edit'); 
    route::get('categorias/{categorias}','show')->name('categorias.show');
 });

 route::post('categorias',[categoriasController::class, 'store'])->name('categorias.store');
 route::get('categorias/{categorias}/edit',[categoriasController::class,'edit'])->name('categorias.edit'); 
 route::put('categorias/{categorias}',[categoriasController::class,'update'])->name('categorias.update');
 route::delete('categorias/{categorias}',[categoriasController::class,'destroy'])->name('categorias.destroy');


 #######################################

 Route::controller(productosController::class)->group(function (){
    route::get('productos','index')->name('productos.index');
    route::get('productos/create','create')->name('productos.create');
    route::get('productos/{productos}/edit')->name('productos.edit'); 
    route::get('productos/{productos}','show')->name('productos.show');
 });

 route::post('productos',[productosController::class, 'store'])->name('productos.store');
 route::get('productos/{productos}/edit',[productosController::class,'edit'])->name('productos.edit'); 
 route::put('productos/{productos}',[productosController::class,'update'])->name('productos.update');
 route::delete('productos/{productos}',[productosController::class,'destroy'])->name('productos.destroy');