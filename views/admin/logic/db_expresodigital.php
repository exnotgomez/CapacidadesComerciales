<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "bd_expresodigital";


$conexion = new mysqli($host, $usuario, $pass, $base_datos);
if ($conexion->connect_error) {
    echo "error en conexion";
    exit();
}
?>