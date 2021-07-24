<?php

use DinoPHP\Router\Route;

Route::get('/', 'Controller@index');
Route::get('/docs', 'Controller@docs');
Route::get('/installation', 'Controller@installation');
Route::get('/directories', 'Controller@directories');
Route::get('/routing', 'Controller@routing');
Route::get('/middleware', 'Controller@middleware');
Route::get('/controllers', 'Controller@controllers');
Route::get('/requests', 'Controller@requests');
Route::get('/response', 'Controller@response');
Route::get('/blade-template', 'Controller@blade_template');
Route::get('/sessions', 'Controller@sessions');
Route::get('/validation', 'Controller@validation');
Route::get('/team', 'Controller@team');
Route::get('/error-handle', 'Controller@error_handle');
Route::get('/database-start', 'Controller@database');
