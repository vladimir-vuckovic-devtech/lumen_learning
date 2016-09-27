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

/*$app->get('/', function () use ($app) {
    return $app->version();
});*/


$app->get('/music/create', "MusicBaseController@create");
$app->get('/music', "MusicBaseController@index");
$app->get('/music/{id}/edit', "MusicBaseController@edit");
$app->get('/music/{id}', "MusicBaseController@show");
$app->post('/music', "MusicBaseController@store");
$app->put('/music/{id}', "MusicBaseController@update");
$app->delete('/music/{id}', "MusicBaseController@destroy");

