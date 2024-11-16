<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Requests\Chamados\AtenderChamadoRequest;
use App\Models\Chamado;
use App\Models\User;

class AtenderChamadoController
{
  public function create($id)
  {
    $chamado = Chamado::find($id);

    if ($chamado)
    {
      return view('pages.chamados.edit', [
        'chamado' => $chamado,
        'usuarios' => User::all(),
      ]);
    }

    return redirect()->route('chamados')->with('danger', 'Chamado não encontrado.');
  }

  public function store(AtenderChamadoRequest $request, $id)
  {
    $fields = $request->validated();
    $chamado = Chamado::find($id);

    if ($chamado)
    {
      $chamado->responsavel_id = $fields['responsavel_id'];
      $chamado->prioridade = $fields['prioridade'];
      $chamado->dt_prazo = $fields['dt_prazo'];

      if ($fields['acao'] == 'finalizar')
      {
        $chamado->status = 'fechado';
        $chamado->dt_finalizacao = date('d/m/Y');
      }
      else if ($fields['acao'] == 'iniciar')
      {
        $chamado->status = 'em andamento';
      }
      
      $chamado->save();
      return redirect()->route('chamados')->with('success', 'Chamado atendido com successo!');
    }

    return redirect()->route('chamados')->with('danger', 'Chamado não encontrado.');
  }
}
