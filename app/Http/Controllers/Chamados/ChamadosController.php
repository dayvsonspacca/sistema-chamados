<?php

namespace App\Http\Controllers\Chamados;

use App\Models\Chamado;
use Carbon\Carbon;

class ChamadosController
{
  public function create()
  {
    return view('pages.chamados.index', [
      'chamados' => Chamado::orderBy('status')->orderBy('id')->paginate(20),
      'em_andamento' => Chamado::where('status', 'em andamento')->count(),
      'abertos' => Chamado::where('status', 'aberto')->count(),
      'fechados' => Chamado::where('status', 'fechado')
        ->whereBetween('dt_finalizacao', [Carbon::now()->startOfMonth()->format('d/m/Y'), Carbon::now()->endOfMonth()->format('d/m/Y')])
        ->count(),
    ]);
  }
}
