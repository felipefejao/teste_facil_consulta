<?php

namespace App\Http\Controllers;

use App\Services\Medico\Contract\MedicoServiceContract;
use http\Env\Response;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    private $medicoService;

    public function __construct(MedicoServiceContract $medicoService)
    {
        $this->medicoService =  $medicoService;
    }

    public function list()
    {
        try {
            $medicos = $this->medicoService->listMedicos();
            if (! $medicos) {
                throw new \Exception("Nenhum médico encontrado", 404);
            }

            return response()->json(['data' => ['medicos' => $medicos]]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], $th->getCode());
        }

    }

    public function listByCity(int $cidadeId)
    {
        try {
            $medico = $this->medicoService->listMedicosByCity($cidadeId);
            if (! $medico) {
                throw new \Exception("Médico não encontrado", 404);
            }

            return response()->json(['data' => ['medicos' => $medico]]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], $th->getCode());
        }
    }
}
