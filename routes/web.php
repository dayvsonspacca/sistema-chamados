<?php
use App\Http\Controllers\Chamados\{CriarChamadosController, EditarChamadoController, ChamadosController, AtenderChamadoController};
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function ()
{
  Route::get('/chamados', [ChamadosController::class, 'create'])->name('chamados');

  Route::get('/chamados/criar', [CriarChamadosController::class, 'create'])->name('chamados.criar');
  Route::post('/chamados/criar', [CriarChamadosController::class, 'store'])->name('chamados.criar.store');

  Route::get('/chamados/atender/{id}', [AtenderChamadoController::class, 'create'])->name('chamados.atender');
  Route::post('/chamados/atender/{id}', [AtenderChamadoController::class, 'store'])->name('chamados.atender.store');

  Route::get('/chamados/editar/{id}', [EditarChamadoController::class, 'create'])->name('chamados.editar');
  Route::post('/chamados/editar/{id}', [EditarChamadoController::class, 'store'])->name('chamados.editar.store');
});