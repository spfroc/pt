<?php

namespace Adobesun\PtFacade;

use Illuminate\Support\Facades\Facade;

class PtFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pt';
    }
}