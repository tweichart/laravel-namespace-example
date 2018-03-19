<?php

namespace ExternalApp\Facades;

use Illuminate\Support\Facades\Facade;
use \ExternalApp\Services\External as ExternalFacade;

class External extends Facade
{

    protected static function getFacadeAccessor()
    {
        return ExternalFacade::class;
    }
}
