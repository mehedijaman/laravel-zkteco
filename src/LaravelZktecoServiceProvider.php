<?php

namespace MehediJaman\LaravelZkteco;

use MehediJaman\LaravelZkteco\Commands\LaravelZktecoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelZktecoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-zkteco')
            ->hasConfigFile();
            // ->hasViews()
            // ->hasMigration('create_laravel-zkteco_table')
            // ->hasCommand(LaravelZktecoCommand::class);
    }
}
