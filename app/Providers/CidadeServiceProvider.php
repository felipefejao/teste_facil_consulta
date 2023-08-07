<?php

namespace App\Providers;

use App\Services\Cidade\CidadeService;
use App\Services\Cidade\Contract\CidadeServiceContract;
use Illuminate\Support\ServiceProvider;

class CidadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CidadeServiceContract::class, CidadeService::class);
    }

    public function provides()
    {
        return [CidadeServiceContract::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
