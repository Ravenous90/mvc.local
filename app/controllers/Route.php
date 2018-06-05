<?php

namespace app\controllers;

class Route
{
    public $route;
    public $route_function;
    private $route_name = 'route';
    private $controller_classes_default = 'Controller';
    private $controller_functions_default = 'action';

    public function __construct()
    {
        if (!empty($_GET[$this->route_name])) {

            $route_pieces = explode('/', $_GET[$this->route_name]);
            $controller_class_name = 'app\controllers\\' . ucfirst($route_pieces[0]) . $this->controller_classes_default;

            if (class_exists($controller_class_name)) {
                $class_instance = new $controller_class_name();

                for ($i = 1; $i < count($route_pieces); $i++) {
                    $controller_method = $this->controller_functions_default . ucfirst($route_pieces[$i]);

                    if (method_exists($controller_class_name, $controller_method)) {
                        $class_instance->$controller_method();

                    } else {
                        $class_instance = new Page404();
                    }
                }
            }
        } else {
            $class_instance = new Page404();
        }
    }
}