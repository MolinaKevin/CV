<?php

use App\Http\Livewire\{
    Curriculum, Cart, Contact, Timeline
};
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


Route::get('/',Curriculum::class)->name('index');

Route::get('/cart',Cart::class)->name('cart');

Route::get('/contact',Contact::class)->name('contact');

Route::get('/timeline',Timeline::class)->name('timeline');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
