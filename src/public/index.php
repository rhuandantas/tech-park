<?php
/**
 * Created by PhpStorm.
 * User: Rhuan
 * Date: 09/05/2018
 * Time: 01:05
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});

$app->run();