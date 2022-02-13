
<?php
include_once "cors.php";
if (!isset($_GET["id"])) {
    echo json_encode(null);
    exit;
}
$id = $_GET["id"];
include_once "funcionesOtros.php";
$otro = obtenerOtroId($id);
header('Content-Type: application/json');
echo json_encode($otro);
