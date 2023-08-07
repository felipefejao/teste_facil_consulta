<?php

namespace App\Services\Paciente;

use App\Repositories\Paciente\Contract\PacienteRepositoryContract;
use App\Services\Paciente\Contract\PacienteServiceContract;

class PacienteService implements PacienteServiceContract
{
    private $pacienteRepository;

    public function __construct(PacienteRepositoryContract $pacienteRepository)
    {
        $this->pacienteRepository = $pacienteRepository;
    }

    public function createPaciente(array $data)
    {
        return $this->pacienteRepository->createPaciente($data);
    }

    public function getPacientes()
    {
        return $this->pacienteRepository->getPacientes()->toArray();
    }

    public function getPacienteById(int $id)
    {
        return $this->pacienteRepository->getPacienteById($id)->toArray();
    }

    public function updatePaciente(int $id, array $data)
    {
        return $this->pacienteRepository->updatePaciente($id, $data);
    }
}
