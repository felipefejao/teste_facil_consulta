<?php

namespace App\Http\Controllers;

use App\Services\Cidade\Contract\CidadeServiceContract;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    private $cidadeService;

    public function __construct(CidadeServiceContract $cidadeService)
    {
        $this->cidadeService = $cidadeService;
    }

    public function list()
    {
        try {
            $cidades = $this->cidadeService->listCidades();
            if (! $cidades) {
                throw new \Exception("Nenhuma cidade encontrada", 404);
            }

            return response()->json(array('cidades' => $cidades), 200);
        } catch (\Throwable $throwable) {
            return response()->json(['Error' => $throwable->getMessage()],$throwable->getCode());
        }

    }
}
