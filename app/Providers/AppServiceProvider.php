<?php

namespace App\Providers;

use App\Contracts\UserContract;
use App\Entities\User;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use ProAI\Datamapper\EntityManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @var \string[][]
     */
    protected $repoBindings = [
        [UserContract::class, UserRepository::class, User::class],
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->getRepoBindings() as $binding) {
            [$contract, $repository, $model] = $binding;

            $this->app->bind($contract, function ($app) use ($repository, $model) {
                return new $repository(new EntityManager());
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * @return array
     */
    public function getRepoBindings(): array
    {
        return $this->repoBindings;
    }
}
