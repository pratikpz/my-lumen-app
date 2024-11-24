<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Console\View\Components\Task;

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

$router->get('/', function ()  {
    return 'Hello lumen';
});

$router->get('/task','TaskController@index');
$router->post('/task','TaskController@store');
$router->get('/task/{id}','TaskController@show');
$router->put('/task/{id}','TaskController@update');
$router->delete('/task/{id}','TaskController@destroy');

