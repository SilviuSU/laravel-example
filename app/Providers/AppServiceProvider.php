<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TasksService;
use App\Repositories\TasksRepository;

class AppServiceProvider extends ServiceProvider
{
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
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TasksService::class, function () {
            $tasksRepository = new TasksRepository();
            return new TasksService($tasksRepository);
        });
    }
}
