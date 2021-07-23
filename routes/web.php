<?php

use DinoPHP\Router\Route;

Route::get('/', 'Controller@index');
Route::get('/docs', 'Controller@docs');
Route::get('/installation', 'Controller@installation');
