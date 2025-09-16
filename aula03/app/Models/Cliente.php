<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;

    protected $table = 'cliente'; // Nome da tabela no banco de dados

    public $fillable = ['id', 'primeiroNome', 'sobrenome']; // Campos que podem ser preenchidos em massa

    public $timestamps = false;  // Desativa os timestamps automáticos (created_at, updated_at)
}
