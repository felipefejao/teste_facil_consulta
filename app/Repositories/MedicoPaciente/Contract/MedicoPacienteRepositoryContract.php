<?php

namespace App\Repositories\MedicoPaciente\Contract;

interface MedicoPacienteRepositoryContract
{
    public function vinculateMedicoPaciente(int $medicoId, int $pacienteId);
}
