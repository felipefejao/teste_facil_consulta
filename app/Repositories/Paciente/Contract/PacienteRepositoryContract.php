<?php

namespace App\Repositories\Paciente\Contract;

interface PacienteRepositoryContract
{
    public function createPaciente(array $data);

    public function getPacientes();

    public function getPacienteById(int $id);

    public function updatePaciente(int $pacienteId, array $data);
}
