<?php
include_once "cors.php";
$otro = json_decode(file_get_contents("php://input"));
include_once "funcionesOtros.php";
$resultado = guardarOtro($otro);
echo json_encode($resultado);