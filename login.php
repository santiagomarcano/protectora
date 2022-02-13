
<?php
include_once "cors.php";
$peticion = json_decode(file_get_contents("php://input"));
if (!isset($peticion->email) || !isset($peticion->password)) {
    echo json_encode(null);
    exit;
}
include_once "funcionesUsuarios.php";
$usuario = obtenerUsuarioEmail($peticion->email);
header('Content-Type: application/json');
// No existe este usuario
if ($usuario == false) {
    $mensaje = array("status" => 404, "mensaje" => "Usuario no encontrado");
    echo json_encode($mensaje);
    return;
} else {
    // Pasamos a md5 la contraseña
    $password = md5($peticion->password);
    // Si coninciden las contraseñas
    if ($usuario->password == $password) {
        $mensaje = array("status" => 200, "rol" => $usuario->tipo, "login" => true);
        echo json_encode($mensaje);
    } else {
        $mensaje = array("status" => 404, "mensaje" => "Usuario no encontrado", "login" => false);
        echo json_encode($mensaje);
    }
}
