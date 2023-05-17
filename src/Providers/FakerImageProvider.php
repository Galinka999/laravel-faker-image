<?php

namespace Galka\FakerImageGenerator\Providers;

use Carbon\Laravel\ServiceProvider;
use Faker\Factory;
use Faker\Generator;
use Galka\FakerImageGenerator\FakerImageGenerator;

class FakerImageProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerImageGenerator($faker));
            return $faker;
        });
    }
}
