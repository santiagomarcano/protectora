<?php
function ver()
{
    // echo $_GET['id'];
    if (!isset($_GET['id']))
        die("No has especificado un identificador.");
    $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'models/animales_model.php';
    //Le pide al modelo el libro con id = $id
    $animal = obtenerAnimal($id);
    if ($animal === null)
        die("Identificador incorrecto");

    //Pasamos a la vista toda la información que se desea representar
    include('views/animales/ver.php');
}

function listar()
{
    // echo $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'models/animales_model.php';
    //Le pide al modelo el libro con id = $id
    $animales = obtenerAnimales();
    //Pasamos a la vista toda la información que se desea representar
    include('views/animales/listar.php');
}

function crear()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Boom baby we a POST method
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $especie = $_POST['especie'];
        $direccion = $_POST['direccion'];
        if (!isset($nombre) || !isset($edad) || !isset($especie) || !isset($direccion)) {
            die('Faltan datos');
        }
        require 'models/animales_model.php';
        $animal = crearAnimal($nombre, $edad, $especie, $direccion);
        echo 'Creado!!';
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include('views/animales/crear.php');
    }
}

// function verTodos()
// {
//     //Incluimos el modelo correspondiente
//     require 'models/animal_model.php';
//     //Le pide al modelo el libro con id = $id
//     $animal = getAnimals($id);
//     if ($animal === null)
//         die("Identificador de libro incorrecto");
//     //Pasamos a la vista toda la información que se desea representar
//     include('views/animals_view.php');
// }
