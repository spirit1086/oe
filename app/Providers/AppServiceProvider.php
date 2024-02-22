<?php

namespace App\Providers;

use App\Modules\Feedback\Interfaces\InterfaceFeedbackRepository;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackService;
use App\Modules\Feedback\Repositories\FeedbackRepository;
use App\Modules\Feedback\Services\FeedbackService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(InterfaceFeedbackRepository::class, function (Application $app) {
            return new FeedbackRepository();
        });
        $this->app->bind(InterfaceFeedbackService::class, function (Application $app) {
            return new FeedbackService(new FeedbackRepository());
        });
    }
}
