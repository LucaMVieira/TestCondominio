<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
    ];
    
    public function apartamentos()
    {
        return $this->belongsToMany(Apartamento::class, 'apartamento_morador')->withTimestamps();
    }
}
