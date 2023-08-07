<?php

namespace App\Services\MedicoPaciente\Contract;

interface MedicoPacienteServiceContract
{
    public function vinculateMedicoPaciente(int $medicoId, int $pacienteId);
}
