<?php

namespace App\Repositories\Cidade;

use App\Models\Cidade;
use App\Repositories\Cidade\Contract\CidadeRepositoryContract;

class CidadeRepository implements CidadeRepositoryContract
{

    public function listCidades()
    {
        return Cidade::all();
    }
}
