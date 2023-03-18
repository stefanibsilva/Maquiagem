<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquiagensController;

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

// Rotas para o CRUD de Maquiagens

// Rota para a listagem de Maquiagens
Route::get('/maquiagens', [MaquiagensController::class, 'index'])->name('maquiagens.index');

// Rota para o formulário de criação de Maquiagens
Route::get('/Maquiagens/create', [MaquiagensController::class, 'create'])->name('Maquiagens.create');

// Rota para o mostrar um gato específico
Route::get('/Maquiagens/{id}', [MaquiagensController::class, 'show'])->name('Maquiagens.show');

// Rota para o formulário de edição de Maquiagens
Route::get('/Maquiagens/{id}/edit', [MaquiagensController::class, 'edit'])->name('Maquiagens.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/Maquiagens', [MaquiagensController::class, 'store'])->name('Maquiagens.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/Maquiagens/{id}', [MaquiagensController::class, 'update'])->name('Maquiagens.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/Maquiagens/{id}', [MaquiagensController::class, 'destroy'])->name('Maquiagens.destroy');
