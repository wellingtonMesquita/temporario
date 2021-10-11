<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Storage;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        FacadesStorage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                //$config['authorization_token']
                $config['token']
            );

            return new Filesystem(new DropboxAdapter($client));
        });
    }
}
