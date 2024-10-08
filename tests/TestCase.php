<?php

namespace nietocjr\LaravelKintoneConnect\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use nietocjr\LaravelKintoneConnect\LaravelKintoneConnectServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'nietocjr\\LaravelKintoneConnect\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelKintoneConnectServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-kintone-connect_table.php.stub';
        $migration->up();
        */
    }
}
