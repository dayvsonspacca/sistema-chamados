<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'descricao',
        'status',
        'prioridade',
        'dt_prazo',
        'responsavel_id'
    ];

    public function responsavel()
    {
        return $this->belongsTo(User::class, 'responsavel_id');
    }
}
