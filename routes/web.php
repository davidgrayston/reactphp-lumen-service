<?php

use Illuminate\Http\Request;

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

$tasks = [];

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/tasks', function () use (&$tasks) {
    return $tasks;
});

$router->post('/tasks', function (Request $request) use (&$tasks) {
    $task = $request->all();
    $tasks[] = $task;
    return $task;
});
