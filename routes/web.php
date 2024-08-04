<?php

$routes = [
    'Accueil' => '../app/controllers/homeController.php',
    '404' => '../app/controllers/errorController.php'
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$action = $action ?? 'Accueil';
$action = isset($routes[$action]) ? $action : '404';
$page = $routes[$action];
require_once $page;