<?php

namespace unaspbr;

use Illuminate\Support\ServiceProvider;

/**
 * IuguLaravel ─ Wraps iugu-php to be used on Laravel
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 0.0.1
 */
class IuguLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return  void
     */
    public function boot()
    {
        // Publish configuration assets
        $this->publishes([
            __DIR__ . '/config/iugu_laravel.php' => config_path('iugu_laravel.php'),
        ]);
    }
}
