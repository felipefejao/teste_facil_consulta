<?php

namespace App\Services\Medico;

use App\Repositories\Medico\Contract\MedicoRepositoryContract;
use App\Services\Medico\Contract\MedicoServiceContract;

class MedicoService implements MedicoServiceContract
{
    private $medicoRepository;

    public function __construct(MedicoRepositoryContract $medicoRepository)
    {
        $this->medicoRepository = $medicoRepository;
    }

    public function listMedicos(): array
    {
        return $this->medicoRepository->listMedicos()->toArray();
    }

    public function listMedicosByCity(int $cidadeId)
    {
        return $this->medicoRepository->listMedicosByCity($cidadeId)->toArray();
    }
}
