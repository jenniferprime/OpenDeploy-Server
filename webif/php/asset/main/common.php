<?php

    function controllerPath(string $controller) : string
    {
        return strtolower("./asset/main/controller/c$controller.php");   
    }

    function controllerClass(string $controller) : string
    {
        return strtolower("c$controller");
    }

    function actionPath(string $controller, string $action): string {
        return strtolower("./asset/main/view/$controller/a$action.php");  
    }
    function actionClass(string $controller, string $action) : string {
        return strtolower("a$action");   
    }




    function importController(string $controller):bool
    {
        include_once(controllerPath($controller));
        return class_exists(controllerClass($controller));
    }

    function importAction(string $controller, string $action):bool
    {
        include_once(actionPath($controller, $action));
        return class_exists(actionClass($controller, $action));
    }
?>