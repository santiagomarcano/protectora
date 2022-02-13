<?php

function dameConexion($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "conexion.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}


function ejecutarConexion()
{
    $password =  dameConexion("MYSQL_PASSWORD");
    $user =  dameConexion("MYSQL_USER");
    $dbName =  dameConexion("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}


function obtenerUsuario()
{
    $bd = ejecutarConexion();
    $sentencia = $bd->query("SELECT id, email FROM usuarios");
    return $sentencia->fetchAll();
}

function eliminarUsuario($id)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("DELETE FROM usuarios WHERE id = ?");
    return $sentencia->execute([$id]);
}


function guardarUsuario($usuario)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("INSERT INTO usuarios(email, password, rol_id) VALUES (?, ?, ?)");
    // Pasamos a md5 la contraseña para guardarla en la base de datos
    return $sentencia->execute([$usuario->email, md5($usuario->password), $usuario->rol_id]);
}

function obtenerUsuarioEmail($email)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("SELECT * FROM usuarios JOIN roles ON roles.id = usuarios.rol_id WHERE email = ?");
    $sentencia->execute([$email]);
    return $sentencia->fetchObject();
}
