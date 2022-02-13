<?php
// require_once('../utils/db.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/protectora_david/utils/db.php');
function obtenerAnimal($id)
{
    $db = conexion();
    $query = 'SELECT * FROM animales WHERE id = ?';
    $sentencia = $db->prepare($query);
    $sentencia->execute([$id]);
    return $sentencia->fetchObject();
}

function crearAnimal($nombre, $edad, $especie, $direccion)
{
    $db = conexion();
    $query = 'INSERT INTO animales (nombre, edad, especie, direccion) VALUES (?, ?, ? , ?)';
    $sentencia = $db->prepare($query);
    return $sentencia->execute([$nombre, $edad, $especie, $direccion]);
}
