<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'andar',
        'bloco',
    ];

    public function moradores()
    {
        return $this->belongsToMany(Morador::class, 'apartamento_morador')->withTimestamps();
    }

    public function condominio()
    {
        return $this->belongsTo(Condominio::class);
    }
}
