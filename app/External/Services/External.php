<?php

namespace ExternalApp\Services;

use Illuminate\Support\Facades\Route;

class External
{

    public function createRoutes()
    {
        Route::group([
            'namespace' => '\SecondApp\Routes',
            'prefix'    => 'external'
        ], function ($router) {
            $router->get('/', 'ExternalController@index');
        });
    }
}
