<?php

namespace App\Providers;

use App\Services\Paciente\Contract\PacienteServiceContract;
use App\Services\Paciente\PacienteService;
use Illuminate\Support\ServiceProvider;

class PacienteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PacienteServiceContract::class, PacienteService::class);
    }

    public function provides()
    {
        return [PacienteServiceContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
