<?php

namespace App\Providers;

use App\Repositories\MedicoPaciente\Contract\MedicoPacienteRepositoryContract;
use App\Repositories\MedicoPaciente\MedicoPacienteRepository;
use Illuminate\Support\ServiceProvider;

class MedicoPacienteRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MedicoPacienteRepositoryContract::class, MedicoPacienteRepository::class);
    }

    public function provides()
    {
        return [MedicoPacienteRepositoryContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
