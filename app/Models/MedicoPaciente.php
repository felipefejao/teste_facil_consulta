<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoPaciente extends Model
{
    use HasFactory;

    protected $table = 'medico_paciente';

    protected $fillable = [
        'medico_id',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function medico()
    {
        return $this->hasOne(Medico::class);
    }
}
