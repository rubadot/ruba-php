<?php


declare(strict_types=1);

namespace Ruba;


use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/services.php',
            'services',
        );
    }

    public function register(): void
    {
        $security = config('services.openapi.access_token');
        $this->app->singleton(
            abstract: Ruba::class,
            concrete: fn (): Ruba => Ruba::builder()->setSecurity(
                $security
            )->build(),
        );
    }
}
