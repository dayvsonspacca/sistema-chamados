<?php

namespace App\Http\Requests\Chamados;

use Illuminate\Foundation\Http\FormRequest;

class AtenderChamadoRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize() : bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules() : array
  {
    return [
      'responsavel_id' => 'nullable',
      'prioridade' => 'required|in:baixa,média,alta',
      'dt_prazo' => 'nullable|date',
      'acao' => 'required|in:finalizar,iniciar',
    ];
  }
}