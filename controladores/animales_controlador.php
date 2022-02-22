<?php
function ver()
{
    // echo $_GET['id'];
    if (!isset($_GET['id']))
        die("No has especificado un identificador.");
    $id = $_GET['id'];
    //Incluimos el modeloo correspondiente
    require 'modelos/animales_modelo.php';
    //Le pide al modeloo el libro con id = $id
    $animal = obtenerAnimal($id);
    if ($animal === null)
        die("Identificador incorrecto");

    //Pasamos a la vista toda la información que se desea representar
    include('vistas/animales/ver.php');
}

function listar()
{

    //Incluimos el modeloo correspondiente
    require 'modelos/animales_modelo.php';
    //Le pide al modeloo el libro con id = $id
    // Pasamos a la vista toda la información que se desea representar
    include('vistas/animales/listar.php');
}

function crear()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Método post, recibimos datos por la variable global $_POST
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $especie = $_POST['especie'];
        $direccion = $_POST['direccion'];

        if (!isset($nombre) || !isset($edad) || !isset($especie) || !isset($direccion)) {
            die('Faltan datos');
        }
        require 'modelos/animales_modelo.php';
        $animal = crearAnimal($nombre, $edad, $especie, $direccion);
        echo 'Creado!!';
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include('vistas/animales/crear.php');
    }
}

// function verTodos()
// {
//     //Incluimos el modeloo correspondiente
//     require 'modeloos/animal_modelo.php';
//     //Le pide al modeloo el libro con id = $id
//     $animal = getAnimals($id);
//     if ($animal === null)
//         die("Identificador de libro incorrecto");
//     //Pasamos a la vista toda la información que se desea representar
//     include('vistas/animals_view.php');
// }
