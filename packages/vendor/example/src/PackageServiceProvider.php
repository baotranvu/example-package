<?php

namespace Vendor\Example;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/package.php' => config_path('package.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Đăng ký cấu hình package
        $this->mergeConfigFrom(
            __DIR__.'/../config/package.php', 'package'
        );
    }
}
