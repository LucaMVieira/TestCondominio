<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
    ];

    public function sindicos()
    {
        return $this->belongsToMany(Sindico::class, 'condominio_sindico')->withPivot('ativo')->withTimestamps();
    }

    public function apartamentos()
    {
        return $this->hasMany(Apartamento::class);
    }
}
