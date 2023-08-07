<?php

namespace App\Repositories\MedicoPaciente;

use App\Models\MedicoPaciente;
use App\Repositories\MedicoPaciente\Contract\MedicoPacienteRepositoryContract;

class MedicoPacienteRepository implements MedicoPacienteRepositoryContract
{

    public function vinculateMedicoPaciente(int $medicoId, int $pacienteId)
    {
        return MedicoPaciente::create([
            'medico_id' => $medicoId,
            'paciente_id' => $pacienteId
        ]);
    }
}
