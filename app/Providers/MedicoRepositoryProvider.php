<?php

namespace App\Providers;

use App\Repositories\Medico\Contract\MedicoRepositoryContract;
use App\Repositories\Medico\MedicoRepository;
use Illuminate\Support\ServiceProvider;

class MedicoRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MedicoRepositoryContract::class, MedicoRepository::class);
    }

    public function provides(): array
    {
        return [MedicoRepositoryContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
