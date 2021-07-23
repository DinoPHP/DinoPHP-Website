<?php

use DinoPHP\Router\Route;

Route::get('/', 'Controller@index');
Route::get('/docs', 'Controller@docs');
Route::get('/installation', 'Controller@installation');
Route::get('/directories', 'Controller@directories');
Route::get('/routing', 'Controller@routing');
Route::get('/middleware', 'Controller@middleware');
