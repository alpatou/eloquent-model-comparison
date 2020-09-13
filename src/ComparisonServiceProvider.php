<?php

namespace PatourasAlexandros\EloquentComparison;

use Illuminate\Support\ServiceProvider;

class ComparisonServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('modelComparison', function($app) {
            return new ModelComparison();
        });
    } 

    public function boot() {
        //
    }

}