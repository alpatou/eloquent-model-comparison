<?php

namespace PatourasAlexandros\EloquentComparison\Tests;

use PatourasAlexandros\EloquentComparison\ComparisonServiceProvider;
use phpDocumentor\Reflection\Types\Void_;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp() : Void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
        ComparisonServiceProvider::class,
        ];
    }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}