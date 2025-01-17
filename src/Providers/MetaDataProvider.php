<?php

namespace Joe\MetaData\Providers;

use Illuminate\Support\ServiceProvider;
use Joe\MetaData\App\Service\Converter\Converter;

class MetaDataProvider extends ServiceProvider
{
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {

    # Publish package config
    $this->publishes([
      __DIR__ . '/../config/meta-data.php' => config_path('meta-data.php'),
    ], 'config');
  }

  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    # Merge configuration
    $this->mergeConfigFrom(
      __DIR__ . '/../config/meta-data.php',
      'meta-data'
    );

    # Bind your service into the service container
    $this->app->singleton('metadata.service.converter', fn() => new Converter());
  }
}
