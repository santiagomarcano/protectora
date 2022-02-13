<?php
include_once "cors.php";
include_once "funcionesUsuarios.php";
$usuario = obtenerUsuario();
header('Content-Type: application/json');
echo json_encode($usuario);
