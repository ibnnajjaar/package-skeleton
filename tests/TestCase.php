<?php

namespace Abunooh\{YourPackage}\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Abunooh\{YourPackage}\{YourPackage}ServiceProvider;
use Abunooh\{YourPackage}\Tests\TestSupport\Providers\TestServiceProvider;

abstract class TestCase extends BaseTestCase
{

    public function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('app.key', 'base64:yWa/ByhLC/GUvfToOuaPD7zDwB64qkc/QkaQOrT5IpE=');

        $this->app['config']->set('session.serialization', 'php');

    }

    protected function getPackageProviders($app)
    {
        return [
            {YourPackage}ServiceProvider::class,
            TestServiceProvider::class
        ];
    }
}
