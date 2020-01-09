<?php

/** Bianky  php framework */

/*
|-----------------------------------------
| Register the autoloader
|-----------------------------------------
|
| Load the autoload the will be used to generate classes that will be used
*/
require __DIR__.'/../vendor/autoload.php';

/*
|-----------------------------------------
| Bootstrap the application
|-----------------------------------------
|
| Bootsrap the application
*/
require __DIR__.'/../bootstrap/app.php';

/*
|-----------------------------------------
| Run the application
|-----------------------------------------
|
| Handle the request and send the response
*/
$app = Application::run();
