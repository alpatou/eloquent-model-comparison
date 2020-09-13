<?php

namespace PatourasAlexandros\EloquentComparison\Fascades;

use Illuminate\Support\Facades\Facade;

class ModelComparison extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'modelComparison';
    }
}