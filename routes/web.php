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