<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquiagem extends Model
{
    use HasFactory;

     // Indica o nome da tabela do banco de dados
     protected $table = "Maquiagens";

      // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'valor',
        'tipo',
        'descriçao',
    ];
}
