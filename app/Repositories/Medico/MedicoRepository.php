<?php

namespace App\Repositories\Medico;

use App\Models\Medico;
use App\Repositories\Medico\Contract\MedicoRepositoryContract;

class MedicoRepository implements MedicoRepositoryContract
{

    public function listMedicos()
    {
       return Medico::all();
    }

    public function listMedicosByCity(int $cidadeId)
    {
        return Medico::where('cidade_id', $cidadeId)
            ->get();
    }
}
