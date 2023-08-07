<?php

namespace App\Services\Medico\Contract;

interface MedicoServiceContract
{
    public function listMedicos();

    public function listMedicosByCity(int $cidadeId);
}
