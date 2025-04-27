<?php

use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\SimulacaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('instituicao')->group(function () {
    Route::get('/',[InstituicaoController::class, 'index'])->name('instituicaoIndex');
});

Route::prefix('convenio')->group(function () {
    Route::get('/',[ConvenioController::class, 'index'])->name('convenioIndex');
});

Route::prefix('simulacao')->group(function () {
    Route::post('/credito',[SimulacaoController::class, 'simulaCredito'])->name('simulacaoCredito');
});
