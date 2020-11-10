<?php

use Slim\App;

return function (App $app) {
    // Define your routes here
    $app->get('/', '\App\Controllers\DefaultController:home');
};
