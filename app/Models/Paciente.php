<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'celular'
    ];

    public function medicoPacientes(): HasMany
    {
        return $this->hasMany(MedicoPaciente::class, 'paciente_id', 'id');
    }
}
