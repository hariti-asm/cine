<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProviderController;

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

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{slug}', [MovieController::class, 'show'])->name('movie.show');
Route::get('/schema/{id}', [SchemaController::class, 'show'])->name('schema.show');

Route::get('/search', [MovieController::class, 'search'])->name('movies.search');
Route::get('/genre/{genre}', [MovieController::class,'filtreParGenre'])->name('movies.genre');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


 
Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']);
Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']);
 
require __DIR__.'/auth.php';
