<?php

namespace App\Providers;

use App\Repositories\Cidade\CidadeRepository;
use App\Repositories\Cidade\Contract\CidadeRepositoryContract;
use Illuminate\Support\ServiceProvider;

class CidadeRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CidadeRepositoryContract::class, CidadeRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function provides(): array
    {
        return [CidadeRepositoryContract::class];
    }
}
