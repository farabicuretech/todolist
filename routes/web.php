<?php

use App\Http\Controllers\TodolistController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TodolistController::class, 'showData'])->name('show.data');
Route::get('/add', [TodolistController::class, 'addData'])->name('add.data');
Route::post('/store', [TodolistController::class, 'store'])->name('store.data');
Route::get('/edit/data/{id}', [TodolistController::class, 'edit'])->name('edit.data');
Route::post('/update/data/{id}', [TodolistController::class, 'update'])->name('update.data');
Route::get('/delete/data/{id}', [TodolistController::class, 'delete'])->name('delete.data');
