<?php
error_reporting (E_ALL); 

include ('config.php'); 

// Ядро сайта
include (SITE_PATH . DS . 'core' . DS . 'core.php'); 

// Router
$router = new Router();

// Задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . 'controllers');

// запускаем маршрутизатор
$router->start();
?>
