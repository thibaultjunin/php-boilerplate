<?php

namespace App\Controllers;

use Slim\Http\Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class DefaultController extends Controller
{

    public function home(Request $request, Response $response, array $args)
    {
        return $response->write("Hello World")->withStatus(200);
    }
}
