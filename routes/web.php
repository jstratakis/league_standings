<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});





//Routes for teams

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/team/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
Route::put('/team/update/{team}', [TeamController::class, 'update'])->name('team.update');
Route::delete('/team/destroy/{team}', [TeamController::class, 'destroy'])->name('team.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');  

Route::middleware('auth')->group(function () {
    Route::get('/player', [PlayerController::class, 'index'])->name('player.index');
    Route::get('/player/create', [PlayerController::class, 'create'])->name('player.create');
    Route::post('/player/store', [PlayerController::class, 'store'])->name('player_store');
    Route::get('/player/edit/{player}', [PlayerController::class, 'edit'])->name('player_edit');
    Route::put('/player/update/{player}', [PlayerController::class, 'update'])->name('player_update');
    Route::delete('/player/destroy/{player}', [PlayerController::class, 'destroy'])->name('player_destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
