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


function eliminaOtro($id)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("DELETE FROM otros WHERE id = ?");
    return $sentencia->execute([$id]);
}



function obtenerOtro()
{
    $bd = ejecutarConexion();
    $sentencia = $bd->query("SELECT id, nombre, direccion, descripcion FROM otros");
    return $sentencia->fetchAll();
}

function guardarOtro($otro)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("INSERT INTO otros(nombre, direccion, descripcion) VALUES (?, ?, ?)");
    return $sentencia->execute([$otro->nombre, $otro->direccion, $otro->descripcion]);
}



function obtenerOtroId($id)
{
    $bd = ejecutarConexion();
    $sentencia = $bd->prepare("SELECT id, nombre, direccion, descripcion FROM otros WHERE id = ?");
    $sentencia->execute([$id]);
    return $sentencia->fetchObject();
}









