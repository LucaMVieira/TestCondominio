<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sindico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
    ];

    public function condominios()
    {
        return $this->belongsToMany(Condominio::class, 'condominio_sindico')->withPivot('ativo')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
