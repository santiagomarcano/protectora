
<?php
include_once "cors.php";
if (!isset($_GET["id"])) {
    echo json_encode(null);
    exit;
}
$id = $_GET["id"];
include_once "funcionesPerros.php";
$perro = obtenerPerroId($id);
header('Content-Type: application/json');
echo json_encode($perro);
