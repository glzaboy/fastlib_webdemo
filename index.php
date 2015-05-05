<?php
require 'init.php';
$route = new \fl\base\route('index', 'home');
error_reporting(E_ALL);
if (preg_match('/^\/api/', $_SERVER['REQUEST_URI'])) {
    echo $route->runasthrift();
} else {
    echo $route->run();
}