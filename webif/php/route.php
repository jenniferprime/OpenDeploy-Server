<?php
    
    

    $envSelfPath = $_SERVER['PHP_SELF'];
    $envPath = $_SERVER['SCRIPT_FILENAME'];
    $envPath = str_replace("/route.php", "", $envPath);
    $envPath = str_replace("/index.php", "", $envPath);
    $envServername = $_SERVER['SERVER_NAME'];
    $envHostname = $_SERVER['HTTP_HOST'];

    require("$envPath/asset/main/include.php");

    $path = "";
    $controller = $_GET['c'] ?? "default";
    $action = $_GET['a'] ?? "default";
    $filter = $_GET['filter'] ?? "none";
    $mode = $_GET['mode'] ?? "none";

    if(importController($controller))
    {
        if(importAction($controller, $action))
        {
            $controllerClass = controllerClass($controller);
            $actionClass = actionClass($controller, $action);

            $action = new $actionClass();
            print($action->renderToHTML());
        }
    }



    
?>