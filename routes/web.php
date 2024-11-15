<?php
use App\Http\Controllers\Chamados\ChamadosController;
use App\Http\Controllers\Chamados\CriarChamadosController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function ()
{
  Route::get('/chamados',  [ChamadosController::class, 'create'])->name('chamados');

  Route::get('/chamados/criar',  [CriarChamadosController::class, 'create'])->name('chamados.criar');
  Route::post('/chamados/criar',  [CriarChamadosController::class, 'store'])->name('chamados.criar.store');
});