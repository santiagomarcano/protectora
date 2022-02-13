<?php
include_once "cors.php";
$gato = json_decode(file_get_contents("php://input"));
include_once "funcionesGatos.php";
$resultado = guardarGato($gato);
echo json_encode($resultado);