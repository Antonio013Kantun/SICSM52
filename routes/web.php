<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentReportsController;
// use Illuminate\Support\Facades\Route;

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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/reportes/{estudiantes}', [StudentReportsController::class, 'show_cardex'])->name('reportes.imprimir');
});

require __DIR__.'/auth.php';


    Route::get('/alumnos',[StudentController::class, "index"]);
    Route::post('/alumnos',[StudentController::class, "store"]);
    Route::put('/estudiantes/{estudiante}', [StudentController::class, 'update'])->name('estudiantes.update');
    Route::delete('/estudiantes/{estudiante}', [StudentController::class, 'destroy'])->name('estudiantes.destroy');


    Route::resource('estudiantes',StudentController::class)->middleware('auth');


    Route::get('/formulario', function () {
        return view('student');
    })->middleware('auth');

    Route::get('/denegado', function () {
        return view('denegado');
    })->name('denegado');







Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

