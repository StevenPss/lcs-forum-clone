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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('discussion', App\Http\Controllers\DiscussionsController::class);
Route::resource('discussion/{discussion}/replies', App\Http\Controllers\RepliesController::class);

Route::post('discussion/{discussion}/replies/{reply}/mark-as-best-reply', [App\Http\Controllers\DiscussionsController::class,'reply'])->name('discussion.best-reply');
