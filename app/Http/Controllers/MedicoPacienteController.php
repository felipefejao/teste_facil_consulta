<?php

namespace App\Http\Controllers;

use App\Services\MedicoPaciente\Contract\MedicoPacienteServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class MedicoPacienteController extends Controller
{
    private $medicoPacienteService;
    public function __construct(MedicoPacienteServiceContract $medicoPacienteService)
    {
        $this->medicoPacienteService = $medicoPacienteService;
    }

    public function vinculate(Request $request, int $pacienteId)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id_medico' => "required",
                'id_paciente' => "required",
            ]);

            if ($validator->fails()) {
                throw new \Exception('Parâmetros incorretos', 400);
            }

            $vinculate = $this->medicoPacienteService->vinculateMedicoPaciente($validator->valid()['id_medico'], $validator->valid()['id_paciente']);
            if (! $vinculate) {
                throw new \Exception('Não foi possível vincular medico e paciente', 404);
            }

            return response()->json(['data' => ['medico e paciente vinculados']], 200);

        } catch (Throwable $throwable) {
            return response()->json(['error' => $throwable->getMessage()], 500);
        }



    }
}
