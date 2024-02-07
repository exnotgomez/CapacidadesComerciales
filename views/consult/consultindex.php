<?php 
$consulta1 = "SELECT * FROM interfaz_index WHERE id_contenido=1";
$consulta2 = "SELECT * FROM interfaz_index WHERE id_contenido=2";
$consulta3 = "SELECT * FROM interfaz_index WHERE id_contenido=3";
$consulta4 = "SELECT * FROM interfaz_index WHERE id_contenido=4";
$consulta5 = "SELECT * FROM proyecto_proyectos WHERE tipo='Principal'";
$consulta6 = "SELECT * FROM blog_blogs ORDER BY id_blog DESC LIMIT 10";

$consult1 = mysqli_query($conexion, $consulta1);
$consult2 = mysqli_query($conexion, $consulta2);
$consult3 = mysqli_query($conexion, $consulta3);
$consult4 = mysqli_query($conexion, $consulta4);
$consult5 = mysqli_query($conexion, $consulta5);
$consult6 = mysqli_query($conexion, $consulta6);
?>