<?php

require_once "config/constants.php";
require_once "config/db.php";
require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "models/LoginModel.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";


$prueba = new LoginModel;
print_r ($prueba->get());
echo '<pre>';
var_dump ($prueba);
echo '</pre>';