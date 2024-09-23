<?php

namespace nietocjr\LaravelKintoneConnect;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use nietocjr\LaravelKintoneConnect\Commands\LaravelKintoneConnectCommand;

class LaravelKintoneConnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-kintone-connect')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_kintone_connect_table')
            ->hasCommand(LaravelKintoneConnectCommand::class);
    }
}
