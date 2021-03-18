<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;


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

// GLOBAL
Route::get('/', [HomeController::class,'home'])->name('home');
   


// ESPECIFICO
Route::post('/notes', [NoteController::class,'store'])->name('notes.store');

Route::get('/notes/{id}', [NoteController::class, 'show'])->where('id', '[0-9]+')->name('notes.show');

Route::put('/notes/{id}', [NoteController::class, 'update'])->where('id', '[0-9]+')->name('notes.update');

Route::delete('/notes/{id}', [NoteController::class, 'delete'])->where('id', '[0-9]+')->name('notes.delete');
