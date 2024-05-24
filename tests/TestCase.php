<?php

namespace MehediJaman\LaravelZkteco\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MehediJaman\LaravelZkteco\LaravelZktecoServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MehediJaman\\LaravelZkteco\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelZktecoServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-zkteco_table.php.stub';
        $migration->up();
        */
    }
}
