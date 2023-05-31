<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;

Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiants/{codeE}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiants/{codeE}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiants/{codeE}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::get('/etudiants/{codeE}/pleine', [EtudiantController::class, 'isClassePleine'])->name('etudiant.pleine');

Route::post('/formations/search', [FormationController::class, 'search'])->name('formation.search');
Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formations/{id}', [FormationController::class, 'show'])->name('formations.show');

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
