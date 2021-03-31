<?php

use App\Http\Livewire\{
    Curriculum, Cart, Contact, Timeline, Index
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

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
Route::domain('es.molinakev.in/')->middleware(['locale:es'])->group(function () {
    Route::get('/', Index::class);
});

Route::domain('en.molinakev.in')->middleware(['locale:en'])->group(function () {
    Route::get('/', Index::class);
});

Route::domain('de.molinakev.in')->middleware(['locale:de'])->group(function () {
    Route::get('/', Index::class);

Route::get('/skills',Curriculum::class)->name('skills');

Route::get('/cart',Cart::class)->name('cart');

Route::get('/contact',Contact::class)->name('contact');

Route::get('/timeline',Timeline::class)->name('timeline');


});

Route::middleware(['locale'])->get('/',Index::class)->name('index');

Route::get('/skills',Curriculum::class)->name('skills');

Route::get('/cart',Cart::class)->name('cart');

Route::get('/contact',Contact::class)->name('contact');

Route::get('/timeline',Timeline::class)->name('timeline');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
