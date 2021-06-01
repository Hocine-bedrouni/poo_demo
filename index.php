<?php
//var_dump($_SERVER);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once(ROOT . '/app/AbstractController.php');
require_once (ROOT .'/app/ModelParrent.php');

$uri = $_SERVER['REQUEST_URI'];
$param_uri = explode('/', $uri);

var_dump($param_uri);

if ($param_uri[1] != '') {
    $controller = ucfirst($param_uri[1]);
    $method = isset($param_uri[2]) ? $param_uri[2] : 'index';
    if (file_exists(ROOT . '/controllers/' . $controller . '.php')) {
        require_once(ROOT . '/controllers/' . $controller . '.php');
        $controller = new $controller;
        if (method_exists($controller, $method)) {
            unset($param_uri[0]);
            unset($param_uri[1]);
            unset($param_uri[2]);
            //fonction classe et méthode utilisé
            call_user_func_array([$controller, $method], $param_uri);
        } else {
            http_response_code(404);
            echo 'la méthode demandé n\'exsiste pas';
        }

    } else {
        http_response_code(404);
        echo 'le controleur demandé n\'existe pas';
    }
}
else{
        require_once(ROOT . '/controllers/Home.php');
        $home = new Home;
        call_user_func_array([$home, 'homepage'], $param_uri);
    }

//var_dump($controller);
//var_dump($method);
