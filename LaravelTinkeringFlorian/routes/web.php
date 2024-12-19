<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

// Rutes per a pelicules
Route::get('/pelicula', [PeliculaController::class, 'index'])->name('pelicula.index');
Route::get('/pelicula/create', [PeliculaController::class, 'create'])->name('pelicula.create');
Route::get('/pelicula/show/{id}', [PeliculaController::class, 'show'])->name('pelicula.show');
Route::get('/pelicula/edit/{id}', [PeliculaController::class, 'edit'])->name('pelicula.edit');
Route::put('/pelicula/update/{id}', [PeliculaController::class, 'update'])->name('pelicula.update');
Route::delete('/pelicula/destroy/{id}', [PeliculaController::class, 'destroy'])->name('pelicula.destroy');
Route::get('/pelicula/delete/{id}', [PeliculaController::class, 'delete'])->name('pelicula.delete');
Route::post('/pelicula/store', [PeliculaController::class, 'store'])->name('pelicula.store');


// Rutes per a vehicles
Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');
Route::get('/vehicle/edit/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
Route::put('/vehicle/update/{id}', [VehicleController::class, 'update'])->name('vehicle.update');
Route::delete('/vehicle/destroy/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
Route::get('/vehicle/delete/{id}', [VehicleController::class, 'delete'])->name('vehicle.delete');

