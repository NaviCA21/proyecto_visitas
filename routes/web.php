<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\VisitanteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/estadistica', function () {
    return view('estadistica');
})->middleware(['auth', 'verified'])->name('estadistica');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('visita', VisitaController::class); //si cambias el nombre de la ruta, tambien cambie el nombre de sus "name"
require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/admin', [UserController::class, 'admin'])->name('admin.admin'); // como estamos creando una sola ruta tipo get y cambias el nombre

Route::get('/register', [UserController::class, 'create'])->name('register.create');

Route::post('register', [UserController::class, 'store'])->name('register.store');


Route::get('visitante', [VisitanteController::class, 'index'])->middleware(['auth', 'verified'])->name('visitante');

//de la ruta no cambia en nada su "name"

Route::delete('user/{user}', [UserController::class, 'delete'])->name('user.delete');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');


// Route::get('juan', [UserController::class, 'task'])->name('cristian.task');

// Route::resource('admin', UserController::class);
// require __DIR__.'/auth.php';

