<?php
include_once "cors.php";
$perro = json_decode(file_get_contents("php://input"));
include_once "funcionesPerros.php";
$resultado = guardarPerro($perro);
echo json_encode($resultado);