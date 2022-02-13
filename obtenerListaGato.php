<?php
include_once "cors.php";
include_once "funcionesGatos.php";
$gato = obtenerGato();
header('Content-Type: application/json');
echo json_encode($gato);
