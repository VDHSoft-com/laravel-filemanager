<?php 

namespace VDHSoft\FilemanagerLaravel;

use Illuminate\Support\ServiceProvider;

class FilemanagerLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publier les ressources
        $this->publishes([
            __DIR__ . '/../../controllers' => base_path('app/Http/Controllers'),
            __DIR__ . '/../../views' => base_path('resources/views/vendor/filemanager-laravel'),
            __DIR__ . '/../../../public' => base_path('public'),
        ], 'filemanager-laravel');

        // Charger les vues
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'filemanager-laravel');

        // Alias (si nécessaire)
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('FilemanagerLaravel', 'VDHSoft\FilemanagerLaravel\Facades\FilemanagerLaravel');
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('FilemanagerLaravel', function () {
            return new FilemanagerLaravel;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['FilemanagerLaravel'];
    }
}

