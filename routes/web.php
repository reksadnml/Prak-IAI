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
//Untuk Menyimpan
$router->post('content', 'ContentController@store');

//Menampilkan Pada Semua Data
$router->get('content', 'ContentController@index');

//Menampilkan salah satu data
$router->get('content/{id}', 'ContentController@show');

//Mengubah Data Tertentu
$router->put('content/{id}', 'ContentController@update');

//menghapus data tertentu
$router->delete('content/{id}', 'ContentController@destroy');

