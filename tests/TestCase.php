<?php

namespace Descom\Skeleton\Tests;

use Descom\Skeleton\SkeletonServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
        SkeletonServiceProvider::class,
    ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
