<?php

namespace App\Providers;

use App\Http\Controllers\TrainnetController;
use App\Models\Deposit;
use App\Models\FinanceCampaign;
use App\Models\Project;
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
        $this->app->bind(DepositInterface::class,DepositRepository::class);
        $this->app->bind(FinanceCampaignInterface::class,FinanceCampaign::class);
        $this->app->bind(ProjectInterface::class,Project::class);
        $this->app->bind(TrainInterface::class,TrainnetRepository::class);
    }
}
