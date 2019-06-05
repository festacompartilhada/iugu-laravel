<?php

namespace unaspbr;

use Config;
use Illuminate\Support\ServiceProvider;

/**
 * IuguServiceProvider ─ The provider. Woah!
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 1.0.5
 */
class IuguServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return  void
     */
    public function boot()
    {
        \Iugu::setApiKey(Config::get('iugu_laravel.IUGU_API_KEY'));
                
        // Publish configuration assets
        $this->publishes([
            __DIR__ . '/config/iugu_laravel.php' => config_path('iugu_laravel.php'),
        ]);
    }
}
