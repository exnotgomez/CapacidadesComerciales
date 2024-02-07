<?php
include("../logic/db_expresodigital.php");

/* ___________________________________Titulo pricipal__________________________________  */
if (isset($_POST["btn-titulo"])) {
    $id = "1";
    $titulo = $_POST["titulo_principal"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_index SET valor='$titulo' WHERE interfaz_index.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}



/* ___________________________________subtitulo__________________________________  */
if (isset($_POST["btn-subtitulo"])) {
    $id = "2";
    $subtitulo = $_POST["subtitulo"];
    if ($subtitulo != "") {
        $mysqli = "UPDATE interfaz_index SET valor='$subtitulo' WHERE interfaz_index.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________imagen principal__________________________________  */
if (isset($_POST['btn-img-principal'])) {
    $archivo = $_FILES['img-principal']['name'];
    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['img-principal']['type'];
        $tamano = $_FILES['img-principal']['size'];
        $temp = $_FILES['img-principal']['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo 2;
        } else if ($tamano > 3000000) {
            echo 3;
        } else {
            $cont = rand(100, 999);
            $ruta = '../../style/img-interfaz/index/' . $cont . $archivo;
            $id = "3";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_index WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/index/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_index SET valor='$cont$archivo' WHERE interfaz_index.id_contenido='$id'";
                $query = mysqli_query($conexion, $mysqli);
                echo 1;
                mysqli_close($conexion);
            }
        }
    }
}

/* ___________________________________imagen secundaria__________________________________  */
if (isset($_POST['btn-img-secundaria'])) {
    $archivo = $_FILES['img-secundaria']['name'];
    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['img-secundaria']['type'];
        $tamano = $_FILES['img-secundaria']['size'];
        $temp = $_FILES['img-secundaria']['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo 2;
        } else if ($tamano > 3000000) {
            echo 3;
        } else {
            $cont = rand(100, 999);
            $ruta = '../../style/img-interfaz/index/' . $cont . $archivo;
            $id = "4";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_index WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/index/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_index SET valor='$cont$archivo' WHERE interfaz_index.id_contenido='$id'";
                $query = mysqli_query($conexion, $mysqli);
                mysqli_close($conexion);
                echo 1;
            }
        }
    }
}

?>