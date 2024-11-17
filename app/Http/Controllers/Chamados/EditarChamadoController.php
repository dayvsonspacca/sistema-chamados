<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Requests\Chamados\CriarChamadoRequest;
use App\Models\Chamado;
use App\Models\User;

class EditarChamadoController
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

  public function store(CriarChamadoRequest $request, $id)
  {
    $fields = $request->validated();
    $chamado = Chamado::find($id);

    if ($chamado)
    {
      $chamado->responsavel_id = $fields['responsavel_id'];
      $chamado->prioridade = $fields['prioridade'];
      $chamado->descricao = $fields['descricao'];
      $chamado->titulo = $fields['titulo'];

      $chamado->save();

      return redirect()->route('chamados')->with('success', 'Chamado editado com successo!');
    }

    return redirect()->route('chamados')->with('danger', 'Chamado não encontrado.');
  }
}