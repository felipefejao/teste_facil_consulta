<?php

namespace App\Services\Cidade;

use App\Repositories\Cidade\Contract\CidadeRepositoryContract;
use App\Services\Cidade\Contract\CidadeServiceContract;

class CidadeService implements CidadeServiceContract
{
    private $cidadeRepository;

    public function __construct(CidadeRepositoryContract $cidadeRepository)
    {
        $this->cidadeRepository = $cidadeRepository;
    }

    public function listCidades()
    {
        return $this->cidadeRepository->listCidades()->toArray();

    }
}
