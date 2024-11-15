<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Requests\Chamados\CriarChamadoRequest;
use App\Models\Chamado;
use App\Models\User;

class CriarChamadosController
{
  public function create()
  {
    return view('pages.chamados.create', [
      'usuarios' => User::all(),
    ]);
  }

  public function store(CriarChamadoRequest $request)
  {
    $fields = $request->validated();
    dd($fields);
    Chamado::create([

    ]);


    return redirect()->route('chamados');
  }
}