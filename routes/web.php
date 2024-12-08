<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

Route::get('/', [FuncionarioController::class, 'index'])->name('funcionarios.index'); // Lista de funcionários
Route::get('funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create'); // Criar novo funcionário
Route::post('funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store'); // Salvar novo funcionário
Route::get('funcionarios/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit'); // Editar funcionário
Route::put('funcionarios/{funcionario}', [FuncionarioController::class, 'update'])->name('funcionarios.update'); // Atualizar funcionário
Route::delete('funcionarios/{funcionario}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy'); // Deletar funcionário
