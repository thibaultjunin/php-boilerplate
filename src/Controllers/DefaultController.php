<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class DefaultController extends Controller
{

    public function home(Request $request, Response $response, array $args)
    {
        echo "Hello World";

        return $response->withStatus(200);
    }
}
