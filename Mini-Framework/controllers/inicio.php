<?php
$usuarios = $app['db']->selectALL('usuario');




require __DIR__ . '/../views/inicio.view.php';