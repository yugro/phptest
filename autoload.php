<?php

require __DIR__."/vendor/autoload.php";



//spl_autoload_register(function ($classname) {
//
//  $filename = 'core/' . str_replace('\\', '/', $classname) . ".php";
//
//  if (!file_exists($filename)) {
//    throw new Exception("Class " . $classname . " not  found", 1);
//  }
//
//  require_once $filename;
//
//});

$controllerName = library\Url::getSegment(0);
$actionName = library\Url::getSegment(1);

if (is_null($controllerName)) {
  $controller = 'controllers\ControllerMain';
}
else {
  $controller = 'controllers\Controller' . ucfirst($controllerName); /*echo $controller; die;*/
}

if (is_null($actionName)) {
  $action = 'actionIndex';
}
else {
  $action = 'action' . ucfirst($actionName);
}


$controller = new $controller();
try {
  if (!method_exists($controller, $action)) {
    throw new Exception('not found', 404);
  }
  {
     $controller->$action();
  }
} catch (Exception $e) {
  header("HTTP/1.1 " . $e->getCode() . " " . $e->getMessage());
  die("Pagee not found");
}