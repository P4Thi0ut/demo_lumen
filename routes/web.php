<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* Gestion des clients */
$router->post('/customer/create', ['uses' => 'APIController@customer_create']);
$router->post('/customer/update/{customer_id}', ['uses' => 'APIController@customer_update']);
$router->get('/customer/list', ['uses' => 'APIController@customer_list']);

/* Gestion des oppportunités */
$router->post('/opportunity/create', ['uses' => 'APIController@opportunity_create']);
$router->post('/opportunity/update/{opportunity_id}', ['uses' => 'APIController@opportunity_update']);
$router->get('/opportunity/list', ['uses' => 'APIController@opportunity_list']);

/* Gestion des utilisateurs */
$router->post('/owner/create', ['uses' => 'APIController@owner_create']);
$router->post('/owner/update/{owner_id}', ['uses' => 'APIController@owner_update']);
$router->get('/owner/list', ['uses' => 'APIController@owner_list']);

/* Gestion des interactions */
$router->post('/interaction/create', ['uses' => 'APIController@interaction_create']);
$router->post('/interaction/update/{interaction_id}', ['uses' => 'APIController@interaction_update']);
$router->get('/interaction/list', ['uses' => 'APIController@interaction_list']);