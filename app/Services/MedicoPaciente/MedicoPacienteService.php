<?php

namespace App\Services\MedicoPaciente;

use App\Repositories\MedicoPaciente\Contract\MedicoPacienteRepositoryContract;
use App\Repositories\MedicoPaciente\MedicoPacienteRepository;
use App\Services\MedicoPaciente\Contract\MedicoPacienteServiceContract;

class MedicoPacienteService implements MedicoPacienteServiceContract
{
    private $medicoPacienteRepository;

    public function __construct(MedicoPacienteRepositoryContract $medicoPacienteRepository)
    {
        $this->medicoPacienteRepository = $medicoPacienteRepository;
    }

    public function vinculateMedicoPaciente(int $medicoId, int $pacienteId)
    {
        return $this->medicoPacienteRepository->vinculateMedicoPaciente($medicoId, $pacienteId);
    }
}
