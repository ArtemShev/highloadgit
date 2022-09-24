<?php

namespace App\Providers;

use App\Services\BubbleSort;
use App\Services\BubbleSortInterface;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoggerInterface::class, function ()
        {
            return new Logger('highload_logger');
        });
        $this->app->bind(BubbleSortInterface::class, BubbleSort::class);
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
}
