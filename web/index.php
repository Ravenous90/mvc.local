<?php

require_once 'autoload.php';

//$app = new app\controllers\App();
//$data1 = new app\controllers\Data1();

$data1 = new app\controllers\Route();
$data1 -> callControllers($route, $route_function);
