<?php
/**
 *  Thiago Soares
 */

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Lib\ConnectionBase;

require './vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];

$app = new \Slim\App($config);


$app->get('/', function(Request $request, Response $response) {

    $conn = new ConnectionBase();

    var_dump($conn->setInstance());

    // return $response->getBody()->write($conn->setInstance());
});

$app->run();