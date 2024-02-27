<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\TicketController;
use \App\Http\Middleware\MemberMiddleware;
use \App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\SeatController;
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

Route::get('/', function () {
    return view('auth/login');
});
Route::middleware(['auth', 'admin'])->group(function () {
//e admin ici
});
Route::middleware(['auth' , 'Member'])->group(function () {
    Route::get('/Home', [MovieController::class, 'index'])->name('home');
    Route::get('/movie/{slug}', [MovieController::class, 'show'])->name('movie.show');
    Route::get('/hall/{id}', [SchemaController::class, 'show'])->name('schema.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/seats/update/{id}', [SeatController::class, 'update'])->name('seats.update');
    Route::get('/tickets/{movie}/{seat}', [TicketController::class, 'show'])->middleware(['auth', 'verified'])->name("tickets");
    Route::get('/search', [MovieController::class, 'search'])->name('movies.search');
    Route::get('/genre/{genre}', [MovieController::class,'filtreParGenre'])->name('movies.genre');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 
Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']);
Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']);
Route::get('/logout', function () {
    request()->session()->invalidate();
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
})->name('logout.home');
require __DIR__.'/auth.php';
