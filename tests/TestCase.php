<?php

namespace hamburgscleanest\LaravelGuzzleThrottle\Tests;

use hamburgscleanest\LaravelGuzzleThrottle\LaravelGuzzleThrottleProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * Class TestCase
 * @package hamburgscleanest\LaravelRiot\Tests
 */
class TestCase extends Orchestra
{

    public function setUp() : void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app) : array
    {
        return [LaravelGuzzleThrottleProvider::class];
    }

}