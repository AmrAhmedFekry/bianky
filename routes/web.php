<?php

use App\Models\User;
// use bianky\Database\Database;
use bianky\Router\Route;

Route::get('/users/{id}', 'UsersController@index');


