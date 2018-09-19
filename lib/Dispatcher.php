<?php
class Dispatcher
{
    public static function dispatch()
    {
        //URI wir in ihre Einzelteile zerlegt.
        $uri = $_SERVER['REQUEST_URI'];
        $uri = strtok($uri, '?');
        $uri = trim($uri, '/');
        $uriFragments = explode('/', $uri);

        //Controllername wird ermittelt
        $controllerName = 'DefaultController';
        if (!empty($uriFragments[0])) {
            $controllerName = $uriFragments[0];
            $controllerName = ucfirst($controllerName);
            $controllerName .= 'Controller';
        }

        //auszuführende methode wird ermittelt
        $method = 'index';
        if (!empty($uriFragments[1])) {
            $method = $uriFragments[1];
        }

        //zeigt den richtigen controller an
        require_once "../controller/$controllerName.php";

        //führt die methode aus
        $controller = new $controllerName();
        $controller->$method();
    }
}
?>