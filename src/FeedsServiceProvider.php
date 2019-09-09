<?php
declare(strict_types = 1);

namespace Krasov\Feeds;

use Illuminate\Support\ServiceProvider;

/**
 * Class FeedsServiceProvider
 *
 * @package Krasov\Feeds
 */
class FeedsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/feeds.php' => config_path('feeds.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('Feeds', static function (): FeedsFactory {
            $config = config('feeds');

            if (! $config) {
                throw new \RunTimeException('Feeds configuration not found. Please run `php artisan vendor:publish`');
            }

            return new FeedsFactory($config);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['Feeds'];
    }
}
