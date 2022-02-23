<?php
// require_once('../utils/db.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/protectora_david/utilidades/db.php');
function obtenerAnimal($id)
{
    $db = conexion();
    $query = 'SELECT * FROM animales WHERE id = ?';
    $sentencia = $db->prepare($query);
    $sentencia->execute([$id]);
    return $sentencia->fetchObject();
}

function obtenerAnimales()
{
    $db = conexion();
    $query = 'SELECT * FROM animales';
    $sentencia = $db->query($query);
    return $sentencia->fetchAll();
}

function crearAnimal($nombre, $edad, $especie, $direccion, $imagen)
{
    $db = conexion();
    $query = 'INSERT INTO animales (nombre, edad, especie, direccion, imagen) VALUES (?, ?, ? , ?, ?)';
    $sentencia = $db->prepare($query);
    return $sentencia->execute([$nombre, $edad, $especie, $direccion, $imagen]);
}

function eliminarAnimal($id)
{
    $db = conexion();
    $query = 'DELETE FROM animales WHERE id = ?';
    $sentencia = $db->prepare($query);
    return $sentencia->execute([$id]);
}
