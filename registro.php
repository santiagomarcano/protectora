
<?php
include_once "cors.php";
$peticion = json_decode(file_get_contents("php://input"));
if (!isset($peticion->email) || !isset($peticion->password)) {
    echo json_encode(null);
    exit;
}
include_once "funcionesUsuarios.php";
header('Content-Type: application/json');
// No existe este usuario
if ($peticion->email == null || $peticion->password == null) {
    $mensaje = array("status" => 404, "mensaje" => "Envie email y password");
    echo json_encode($mensaje);
    return;
} else {
    // Pasamos a md5 la contraseña
    $resultado = guardarUsuario($peticion);
    $mensaje = array("status" => 200, "rol" => null, "registrado" => true);
    echo json_encode($mensaje);
}
