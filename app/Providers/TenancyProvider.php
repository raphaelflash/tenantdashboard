<?php

namespace App\Providers;

use App\Tenant;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class TenancyProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRequests();
    }

    /**
     *
     */
    public function configureRequests()
    {
        if (! $this->app->runningInConsole()) {
            $host = $this->app['request']->getHost();
            $local = Str::after(config('app.url'), '://');
            if ($host == $local) {
                config(['database.default' => 'landlord']);
                return;
            }

            Tenant::whereDomain($host)->firstOrFail()->configure()->use();
        }
    }
}
