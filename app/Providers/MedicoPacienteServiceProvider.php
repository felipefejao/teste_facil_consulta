<?php

namespace App\Providers;

use App\Services\MedicoPaciente\Contract\MedicoPacienteServiceContract;
use App\Services\MedicoPaciente\MedicoPacienteService;
use Illuminate\Support\ServiceProvider;

class MedicoPacienteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MedicoPacienteServiceContract::class,MedicoPacienteService::class);
    }

    public function provides()
    {
        return [MedicoPacienteServiceContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
