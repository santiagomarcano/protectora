<?php
// $miDominio = "http://localhost:3306";
$miDominio = "*";
header("Access-Control-Allow-Origin: " . $miDominio);
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
