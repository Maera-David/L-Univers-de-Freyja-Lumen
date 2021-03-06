<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', ['as' => 'index', function () {
    return view('index');
}]);

$router->get('/apropos', ['as'=> 'apropos', function() {
    return view('about');
}]);

$router->get('/contact', ['as'=> 'contactForm', function() {
    return view('contactForm');
}]);

$router->post('/contact', ['as'=> 'contactSend', 'uses' => 'ContactController@sendMail']);
