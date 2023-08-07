<?php

namespace App\Providers;

use App\Repositories\Paciente\Contract\PacienteRepositoryContract;
use App\Repositories\Paciente\PacienteRepository;
use Illuminate\Support\ServiceProvider;

class PacienteRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PacienteRepositoryContract::class, PacienteRepository::class);
    }

    public function provides()
    {
        return [PacienteRepositoryContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
