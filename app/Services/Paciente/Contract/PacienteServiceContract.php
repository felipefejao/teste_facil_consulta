<?php

namespace App\Services\Paciente\Contract;

interface PacienteServiceContract
{
    public function createPaciente(array $data);

    public function getPacientes();

    public function getPacienteById(int $id);

    public function updatePaciente(int $id, array $data);
}
