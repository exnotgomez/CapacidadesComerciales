<?php
$id = $_GET['blog'];
$consulta1 = "SELECT * FROM blog_blogs WHERE id_blog='$id'";

$consult1 = mysqli_query($conexion, $consulta1);
?>