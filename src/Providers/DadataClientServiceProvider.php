<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Providers;

use Illuminate\Support\ServiceProvider;
use OrlovTech\DadataClient\Requests\GetCleanAddressRequest;
use OrlovTech\DadataClient\Requests\GetCleanNameRequest;

class DadataClientServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $requests = [
            GetCleanAddressRequest::class,
            GetCleanNameRequest::class,
        ];

        foreach ($requests as $requestClass) {
            $this->app->singleton(
                $requestClass,
                fn () => new $requestClass(
                    config('dadata-client.url'),
                    config('dadata-client.api_key'),
                    config('dadata-client.secret_key'),
                ),
            );
        }
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/dadata-client.php' => config_path('dadata-client.php'),
            ]);
        }
    }
}
