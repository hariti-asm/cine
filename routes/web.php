<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\SeatController;
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

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movie/{slug}', [MovieController::class, 'show'])->name('movie.show');
Route::get('/hall/{id}', [SchemaController::class, 'show'])->name('schema.show');


// Route::put('/seats/{id}', [SeatController::class, 'update'])->name('seats.update');
Route::put('/seats/update/{id}', [SeatController::class, 'update'])->name('seats.update');

Route::get('/tickets/{movie}/{seat}', [TicketController::class, 'show'])->middleware(['auth', 'verified'])->name("tickets");




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
