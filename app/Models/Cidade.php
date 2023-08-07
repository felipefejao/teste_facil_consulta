<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Validation\Rules\Enum;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'estado',
    ];

    /**
     * Relationship with medico model
     *
     * @return HasMany
     */
    public function medicos(): HasMany
    {
        return $this->hasMany(Medico::class);
    }
}
