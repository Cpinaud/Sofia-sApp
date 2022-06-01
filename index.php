<?php
include_once ("helper/Configuration.php");
include_once ("helper/Router.php");
$configuration = new Configuration();
$router = new Router($configuration, "getPedidoController", "execute");

$controller = isset($_GET["controller"])? $_GET['controller'] : "" ;
$method = isset($_GET["method"])? $_GET['method'] : "";

$router-> executeActionFromModule($controller, $method);