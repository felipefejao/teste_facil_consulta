<?php

namespace App\Http\Controllers;

use App\Services\Paciente\Contract\PacienteServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class PacienteController extends Controller
{
    private $pacienteService;

    public function __construct(PacienteServiceContract $pacienteService)
    {
        $this->pacienteService = $pacienteService;
    }

    public function list()
    {
        try {
            $pacientes = $this->pacienteService->getPacientes();
            if (!$pacientes) {
                throw new \Exception("Nenhum paciente encontrado", 404);
            }

            return response()->json(['data' => $pacientes]);

        } catch (\Throwable $throwable) {
            return response()->json(['Error' => $throwable->getMessage()], $throwable->getCode());
        }
    }

    public function update(Request $request,int $pacienteId)
    {
        try{
            $paciente = $this->pacienteService->getPacienteById($pacienteId);
            if (! $paciente) {
                throw new \Exception("Paciente não encontrado", 404);
            }

            $validator = $this->validateRequest($request);
            if ($validator->fails()) {
                throw new Exception("Parâmetros incorretos", 400);
            }

            $updated = $this->pacienteService->updatePaciente($pacienteId, $validator->valid());
            if (! $updated) {
                throw new Exception("Erro ao atualizar", 402);
            }

            return response()->json(['data' => ['mensagem' => 'Paciente atualizado com sucesso']]);
        } catch (\Throwable $throwable) {
            return response()->json(['error' => $throwable->getMessage()], $throwable->getCode());
        }
    }

    public function create(Request $request)
    {
        try {
            $validator = $this->validateRequest($request);
            if ($validator->fails()) {
                throw new Exception("Parâmetros incorretos", 400);
            }

            $included = $this->pacienteService->createPaciente($validator->valid());
            if (! $included) {
                throw new Exception("Erro ao criar paciente", 400);
            }

            return response()->json(['data' => ['message' => "Paciente criado com sucesso"]]);

        } catch (\Throwable $throwable) {
            return response()->json(['error' => $throwable->getMessage()], $throwable->getCode());
        }
    }

    private function validateRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'nome' => "required|min:3",
            'cpf' => "required|min:11",
            'celular' => "required|min:11"
        ]);
    }
}
