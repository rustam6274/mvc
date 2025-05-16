<?php

namespace core\route;

class Route {
    public static $routes = array();

    public static function addRoute($method, $route, $action) {
        self::$routes[$method][$route] = $action;
    }

    public static function get($route, $action) {
        self::addRoute('GET', $route, $action);
    }
}
