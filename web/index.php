<?php
/**
 * Swagger bootstrap
 */

$pathinfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
$params = [];
if(empty($pathinfo)){
    $controller = 'index';
    $method = 'index';
}else{
    $pathinfo = trim($pathinfo, '/');
    var_dump($pathinfo);
    if(false === strpos($pathinfo, '/')){
        $controller = $pathinfo;
        $method = 'index';
    }else{
        $request = explode('/', $pathinfo);
        $controller = array_shift($request);
        $method = array_shift($request);
        $params = $request;
    }
}
$controller = ucfirst($controller) . 'Controller';
$method = strtolower($method).'Action';
if(!file_exists(__DIR__.'/../src/Controller/'.$controller.'.php')){
    header('location:/404.html');
    die();
}
$Controller = new $controller;
if(!method_exists($Controller, $method)){
    header('location:/404.html');
    die();
}
call_user_func_array(array(&$Controller, $method), $params);