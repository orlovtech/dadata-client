<?php

declare(strict_types=1);

namespace tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use OrlovTech\DadataClient\Providers\DadataClientServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [DadataClientServiceProvider::class];
    }
}
