<?php
namespace core\route;

class Dispatcher
{
    private $requestMethod;
    private $requestUri;

    public function __construct($requestMethod, $requestUri)
    {
        $this->requestMethod = $requestMethod;
        $this->requestUri = $requestUri;
    }

    public function dispatch()
    {
        foreach (Route::$routes[$this->requestMethod] as $route => $action) {
            if ($route === $this->requestUri) {
                return $this->executeAction($action);
            }
        }

        http_response_code(404);
        echo 'Такой страницы нет';
    }

    private function executeAction($action)
    {
        if (is_callable($action)) {
            return $action();
        }

        list($controller, $method) = explode('@', $action);

        $controller = new $controller;
        return $controller->$method();
    }
}
