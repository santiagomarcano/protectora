<?php
include_once "cors.php";
include_once "funcionesOtros.php";
$otro = obtenerOtro();
header('Content-Type: application/json');
echo json_encode($otro);
