<?php

namespace App\Repositories\Medico\Contract;

interface MedicoRepositoryContract
{
    public function listMedicos();

    public function listMedicosByCity(int $cidadeId);
}
