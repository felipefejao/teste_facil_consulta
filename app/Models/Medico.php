<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Medico extends Model
{
    use HasFactory;

    public const ESPECIALIDADE = [
        'Cardiologia',
        'Endócrinologia',
        'Alergologia',
        'Urologia',
        'Obstetrícia',
        'Clinica Geral'
    ];

    protected $fillable = [
        'nome',
        'especialidade',
    ];

    public function cidade(): HasMany
    {
        return $this->hasMany(Cidade::class, "id", "cidade_id");
    }

    public function medicoPacientes(): HasMany
    {
        return $this->hasMany(MedicoPaciente::class, 'medico_id', 'id');
    }
}
