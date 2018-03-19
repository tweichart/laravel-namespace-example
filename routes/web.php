<?php
//default setup of a route
Route::group([
    'namespace' => 'Internal',
    'prefix'    => 'internal'
], function () {
    Route::get('/', 'Controller@index');
});
//setting up a route from a different namespace
//this serves as an example namespace, as usually
//this would require a package loaded by composer
//for the sake of this example there's a new
//namespace created in the app folder
\ExternalApp\Facades\External::createRoutes();
