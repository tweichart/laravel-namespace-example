<?php

namespace ExternalApp\Services;

use Illuminate\Support\Facades\Route;

class External
{

    public function createRoutes()
    {
        Route::group([
            'namespace' => '\ExternalApp\Routes\External',
            'prefix'    => 'external'
        ], function ($router) {
            $router->get('/', 'Controller@index');
        });
    }
}
