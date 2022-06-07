<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
Route::get('/create',[UsersController::class,'index'])->name('create.index');
Route::post('/',[UsersController::class,'store'])->name('create.store');
Route::get('/participant',[UsersController::class,'shows'])->name('create.shows');

Route::get('/show/{id}',[UsersController::class,'show'])->name('create.show');
Route::get('/edit/{id}',[UsersController::class,'edit'])->name('create.edit');
Route::post('/edit/{id}',[UsersController::class,'update'])->name('create.update');
Route::get('/participant/{id}',[UsersController::class,'delete'])->name('create.delete');