<?php

namespace App\Providers;

use App\Services\Infra\DropboxUploadService;
use App\Services\Infra\UploadServiceContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UploadServiceContract::class, DropboxUploadService::class);
    }
}
