<?php

use FastRoute\RouteCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', 'App\controllers\UserController@index');
    $r->addRoute('GET', '/register', 'App\controllers\UserController@register');
    $r->addRoute('POST', '/register', 'App\controllers\UserController@register');
});

// Fetch method and URI from server variables
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        $response = new Response('Not Found', 404);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        $response = new Response('Method Not Allowed', 405);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        list($class, $method) = explode('@', $handler);
        $controller = new $class;

        $request = Request::createFromGlobals();
        $response = $controller->$method($request);
        break;
}

$response->send();
