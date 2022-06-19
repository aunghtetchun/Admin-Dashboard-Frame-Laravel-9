<?php

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
Route::get('/sample',[\App\Http\Controllers\HomeController::class,'sample'])->name('sample');

Auth::routes();


Route::get('/edit',[\App\Http\Controllers\ProfileController::class,'edit'])->name('profile.edit');
Route::post('/change-password',[\App\Http\Controllers\ProfileController::class,'changePassword'])->name('profile.changePassword');
Route::post('/change-name',[\App\Http\Controllers\ProfileController::class,'changeName'])->name('profile.changeName');
Route::post('/change-email',[\App\Http\Controllers\ProfileController::class,'changeEmail'])->name('profile.changeEmail');
Route::post('/change-photo',[\App\Http\Controllers\ProfileController::class,'changePhoto'])->name('profile.changePhoto');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('advance-form',[\App\Http\Controllers\HomeController::class,'advanceForm'])->name('advanceForm');
Route::get('validation',[\App\Http\Controllers\HomeController::class,'validation'])->name('validation');
Route::get('gallery',[\App\Http\Controllers\HomeController::class,'gallery'])->name('gallery');
Route::get('cuser',[\App\Http\Controllers\HomeController::class,'cuser'])->name('cuser');
Route::get('carousel',[\App\Http\Controllers\HomeController::class,'carousel'])->name('carousel');
Route::get('tab',[\App\Http\Controllers\HomeController::class,'tab'])->name('tab');
Route::get('article',[\App\Http\Controllers\HomeController::class,'article'])->name('article');

