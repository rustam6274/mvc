<?php
namespace route;

use core\route\Route;

Route::get('/', function() {
    echo 'Вас приветствует начальная страница!';
});

Route::get('/sss', function() {
    echo 'Hello World!';
});

Route::get('/sss5', function() {
    echo 'Hello World5!';
});

Route::get('/1', 'app\controllers\HomeController@index1');
Route::get('/2', 'app\controllers\HomeController@index2');
