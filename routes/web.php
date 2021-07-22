<?php

use DinoPHP\Router\Route;

Route::get('/', function () {
	return view('index');
});