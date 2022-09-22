<?php

require_once "controller/Usuario_Controller.php";
require_once "inc/config.php";
require_once "model/Usuario.php";

$app = new Usuario_Controller();

if (!isset($_GET['act'])) {
    $app->all();

} else if ($_GET['act'] == "create") {
    $app->create();

} else if ($_GET['act'] == "usuario") {
    $app->read();

} else if ($_GET['act'] == "update") {
    $app->update();

} else if ($_GET['act'] == "delete") {
    $app->delete();
}