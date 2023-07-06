<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
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
//Home
Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
//search prodotti
Route::get('/products',[PublicController::class,'prodotti'])->name('prodotti');
Route::get('product/show/{product}',[PublicController::class,'show'])->name('book.show');
Route::get('/search',[PublicController::class,'search'])->name('search');
//mail
Route::get('/contactus',[ContactController::class,'contactus'])->name('contactus');
Route::post('/sendmail',[ContactController::class,'sendmail'])->name('sendmail');
Route::get('/grazie',[ContactController::class,'grazie'])->name('grazie');
//nuovo prodotto in database
Route::get('/book/create',[BookController::class, 'create'])->name('book.create');
Route::post('/book/send',[BookController::class, 'send'])->name('book.send');
//modifica prodotto
Route::get('product/edit/{product}',[BookController::class,'edit'])->name('book.edit');
Route::put('product/update/{book}',[BookController::class,'update'])->name('book.update');
//elimina prodotto
Route::delete('product/delete/{product}',[BookController::class,'delete'])->name('book.delete');
//rotta profilo per login ecc..
Route::get('/myprofile',[ProfileController::class,'profile'])->name('user.profile');
//rotte crud con livewire
Route::get('article/create',[ArticleController::class,'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
