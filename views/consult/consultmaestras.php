<?php
$consultArea = mysqli_query($conexion, "SELECT * FROM maestra_area");
$consultCargo = mysqli_query($conexion, "SELECT * FROM maestra_cargo");
$consultEtiqueta = mysqli_query($conexion, "SELECT * FROM maestra_etiqueta");
$consultSeccion = mysqli_query($conexion, "SELECT * FROM maestra_seccion");
?>