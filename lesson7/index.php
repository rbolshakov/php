<?php
$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

try {
    require_once $routes[$controller] ?? "view/404.php";
} catch (Throwable $exception) {
    echo $exception->getMessage();
}
