<?php

namespace App\Providers;

use App\Services\Medico\Contract\MedicoServiceContract;
use App\Services\Medico\MedicoService;
use Illuminate\Support\ServiceProvider;

class MedicoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MedicoServiceContract::class, MedicoService::class);
    }

    public function provides()
    {
        return [MedicoServiceContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
