<?php
//La carpeta donde buscaremos los controladores
define('CONTROLLERS_FOLDER', "controladores/");

//Si no se indica un controlador, este es el controlador que se usará
define('DEFAULT_CONTROLLER', $controller);

//Si no se indica una acción, esta acción es la que se usará
define('DEFAULT_ACTION', "listar");

//Obtenemos el controlador.
//Si el usuario no lo introduce, seleccionamos el de por defecto.
$controller = DEFAULT_CONTROLLER;
if (!empty($_GET['controlador']))
    $controller = $_GET['controlador'];

$accion = DEFAULT_ACTION;
// Obtenemos la acción seleccionada.
// Si el usuario no la introduce, seleccionamos la de por defecto.
if (!empty($_GET['accion']))
    $accion = $_GET['accion'];
//Ya tenemos el controlador y la accion
//Formamos el nombre del fichero que contiene nuestro controlador
$controller = CONTROLLERS_FOLDER . $controller . '_controlador.php';
//Si la variable $controller es un fichero lo requerimos
if (is_file($controller))
    require_once($controller);
else
    throw new Exception('El controlador no existe - 404 not found');

//Si la variable $accion es una funcion la ejecutamos o detenemos el script
if (is_callable($accion))
    $accion();
else
    throw new Exception('La accion no existe - 404 not found');
