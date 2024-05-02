<?php

include '../controllers/DataBaseController.php';
include '../models/Usuario.php';
include '../controllers/InicioSesion.php';
include '../views/index.php';

session_start();

session_unset();

session_destroy();

header("Location: index.php");
?>