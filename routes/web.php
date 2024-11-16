<?php
use App\Http\Controllers\Chamados\AtenderChamadoController;
use App\Http\Controllers\Chamados\ChamadosController;
use App\Http\Controllers\Chamados\CriarChamadosController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function ()
{
  Route::get('/chamados',  [ChamadosController::class, 'create'])->name('chamados');

  Route::get('/chamados/criar',  [CriarChamadosController::class, 'create'])->name('chamados.criar');
  Route::post('/chamados/criar',  [CriarChamadosController::class, 'store'])->name('chamados.criar.store');
  
  Route::get( '/chamados/atender/{id}',  [AtenderChamadoController::class, 'create'])->name('chamados.atender');
  Route::post( '/chamados/atender/{id}',  [AtenderChamadoController::class, 'store'])->name('chamados.atender.store');
});