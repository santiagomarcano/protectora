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
    // Pasamos a la vista toda la información que se desea representar
    $animales = obtenerAnimales();
    // var_dump($animales);
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

        $image = $_POST['picture'];

        //Stores the filename as it was on the client computer.
        $imagename = $_FILES['picture']['name'];
        //Stores the filetype e.g image/jpeg
        $imagetype = $_FILES['picture']['type'];
        //Stores any error codes from the upload.
        $imageerror = $_FILES['picture']['error'];
        //Stores the tempname as it is given by the host when uploaded.
        $imagetemp = $_FILES['picture']['tmp_name'];

        //The path you wish to upload the image to
        $imagePath = "assets/img/mascotas/";

        if (is_uploaded_file($imagetemp)) {
            if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
                if (!isset($nombre) || !isset($edad) || !isset($especie) || !isset($direccion)) {
                    include('vistas/animales/crear.php');
                    die;
                }
                require 'modelos/animales_modelo.php';
                $animal = crearAnimal($nombre, $edad, $especie, $direccion, $imagename);
                $animales = obtenerAnimales();
                include('vistas/animales/listar.php');
            } else {
                // pantalla error
                echo "Failed to move your image.";
            }
        } else {
            // pantalla error
            echo "Failed to upload your image.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include('vistas/animales/crear.php');
    }
}

function eliminar()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Método post, recibimos datos por la variable global $_POST
        $id = $_POST['id'];
        if (!isset($id)) {
            echo "Faltan datos";
            die;
        }
        require 'modelos/animales_modelo.php';
        eliminarAnimal($id);
        $animales = obtenerAnimales();
        include('vistas/animales/listar.php');
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
