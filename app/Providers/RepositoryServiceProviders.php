<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\BaseRepository;

use App\Repositories\BaseRepositoryInterface;
use App\Repositories\UserRepository;

class RepositoryServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(BaseRepositoryInterface::class,BaseRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
        
    }
}
