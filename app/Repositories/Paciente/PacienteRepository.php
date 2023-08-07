<?php

namespace App\Repositories\Paciente;

use App\Models\Paciente;
use App\Repositories\Paciente\Contract\PacienteRepositoryContract;

class PacienteRepository implements PacienteRepositoryContract
{

    public function createPaciente(array $data)
    {
        return Paciente::create($data);
    }

    public function getPacientes()
    {
        return Paciente::all();
    }

    public function getPacienteById(int $id)
    {
        return Paciente::where('id', $id)->get();
    }

    public function updatePaciente(int $pacienteId, array $data)
    {
        return Paciente::where('id', $pacienteId)->update($data);
    }
}
