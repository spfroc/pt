<?php

namespace Adobesun\Pt;

use Illuminate\Support\Facades\Facade;

class PtFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pt';
    }
}