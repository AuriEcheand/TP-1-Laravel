<?php

use Illuminate\Support\Facades\Route;
use App\Models\Etudiant;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\DB;


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
    return view('accueil');
});


Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant/{id}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::get('/creerEtudiant', [EtudiantController::class, 'create'])->name('creerEtudiant');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::delete('/etudiant/{id}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');