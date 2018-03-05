<?php
require_once("init.php");

$router = new Router();
$showDataFromWWW = new ShowDataFromWWW();

try {
    $router->runController();
} catch (DivisionByZeroException $exception) {
    echo $exception->getMessage();
}
