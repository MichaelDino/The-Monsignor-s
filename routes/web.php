<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/theMonsignors', [PublicController::class, 'monsignor'])->name('themonsignors');
Route::get('/theestate', [PublicController::class, 'estate'])->name('theestate');
Route::get('/themanor', [PublicController::class, 'manor'])->name('themanor');
Route::get('/thevilla', [PublicController::class, 'villa'])->name('thevilla');
Route::get('/whoweare', [PublicController::class, 'whoweare'])->name('whoweare');
Route::get('/sustainability', [PublicController::class, 'sustainability'])->name('sustainability');
Route::get('/mola', [PublicController::class, 'mola'])->name('mola');
Route::get('/contact_us', [PublicController::class, 'contact'])->name('contact_us');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');