<?php
include_once "cors.php";
include_once "funcionesPerros.php";
$perros = obtenerPerro();
$html = '
    <style>
        p {
            color: green;
            margin: 0;
        }
    </style>
';
foreach ($perros as $perro) {
    $html .= '<p>' . $perro->nombre . ' | ' . $perro->id . '</p><br/>';
}
// echo $html;
echo $html;
// header('Content-Type: application/html');
// echo '';
