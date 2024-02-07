<?php
include("../logic/db_expresodigital.php");

/* ___________________________________Titulo pricipal__________________________________  */
if (isset($_POST["btn-titulo"])) {
    $id = "1";
    $titulo = $_POST["titulo_principal"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_apps SET valor='$titulo' WHERE interfaz_apps.id_contenido='$id'";
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
            $ruta = '../../style/img-interfaz/aplicativos/' . $cont . $archivo;
            $id = "2";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_apps WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/aplicativos/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_apps SET valor='$cont$archivo' WHERE interfaz_apps.id_contenido='$id'";
                $query = mysqli_query($conexion, $mysqli);
                echo 1;
                mysqli_close($conexion);
            }
        }
    }
}

/* ___________________________________subtitulo__________________________________  */
if (isset($_POST["btn-subtitulo"])) {
    $id = "3";
    $subtitulo = $_POST["subtitulo"];
    if ($subtitulo != "") {
        $mysqli = "UPDATE interfaz_apps SET valor='$subtitulo' WHERE interfaz_apps.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}


/* ___________________________________descripcion__________________________________  */
if (isset($_POST["btn-descripcion"])) {
    $id = "4";
    $descripcion = $_POST["descripcion"];
    if ($descripcion != "") {
        $mysqli = "UPDATE interfaz_apps SET valor='$descripcion' WHERE interfaz_apps.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}
/* ___________________________________ add aplicacion __________________________________  */
if (isset($_POST['btn-app'])) {
    $nombre = $_POST["nombre"];
    $archivo = $_FILES['imagen']['name'];
    $tipoApp = $_POST["tipo"];
    $seccion = $_POST["seccion"];
    $url = $_POST["url"];
    $vista = 6;
    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        $temp = $_FILES['imagen']['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo 2;
        } else if ($tamano > 3000000) {
            echo 3;
        } else {
            $cont = rand(100, 999);
            $ruta = '../../style/img-interfaz/img-app/' . $cont . $archivo;
            if (move_uploaded_file($temp, $ruta)) {
                $mysqli = "INSERT INTO apps_apps(nombre_app,seccion_app,tipo_app,url_app,imagen_app,vista)VALUES('" . $nombre . "','" . $seccion . "','" . $tipoApp . "','" . $url . "','" . $cont . $archivo . "','" . $vista . "')";
                $query = mysqli_query($conexion, $mysqli);
                mysqli_close($conexion);
                echo 1;
            }
        }
    }
}
/* ___________________________________proyecto edit__________________________________  */
if (isset($_POST['btn-edit'])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $archivo = $_FILES['imagen']['name'];
    $img = $_POST["img"];
    $tipoApp = $_POST["tipo"];
    $seccion = $_POST["seccion"];
    $url = $_POST["url"];
    $vista = 6;
    if ($nombre != "" || $tipoApp != "" || $seccion != "" || $url != "") {
        if ($archivo == "") {
            $mysqli = "UPDATE apps_apps SET nombre_app='$nombre',seccion_app='$seccion',tipo_app='$tipoApp',url_app='$url',imagen_app='$img',vista='$vista' WHERE apps_apps.id_app='$id'";
            $query = mysqli_query($conexion, $mysqli);
            if ($query) {
                mysqli_close($conexion);
                echo 1;
            }
        } else {
            $tipo = $_FILES['imagen']['type'];
            $tamano = $_FILES['imagen']['size'];
            $temp = $_FILES['imagen']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
                echo 2;
            } else if ($tamano > 3000000) {
                echo 3;
            } else if (isset($archivo)) {
                $cont = rand(100, 999);
                $ruta = '../../style/img-interfaz/img-app/' . $cont . $archivo;
                if (move_uploaded_file($temp, $ruta)) {
                    $sql = mysqli_query($conexion, "SELECT imagen_app FROM apps_apps WHERE id_app='$id'");
                    while ($p = mysqli_fetch_array($sql)) {
                        unlink('../../style/img-interfaz/img-app/' . $p['imagen_app']);
                    }
                    $mysqli = "UPDATE apps_apps SET nombre_app='$nombre',seccion_app='$seccion',tipo_app='$tipoApp',url_app='$url',imagen_app='$cont$archivo',vista='$vista' WHERE apps_apps.id_app='$id'";
                    $query = mysqli_query($conexion, $mysqli);
                    if ($query) {
                        mysqli_close($conexion);
                        echo 1;
                    }
                }
            }
        }
    }
}
/* ___________________________________aplicacion eliminar__________________________________  */
if (isset($_POST["btn-eliminar"])) {
    $id = $_POST["id"];
    $sql = mysqli_query($conexion, "SELECT imagen_app FROM apps_apps WHERE id_app='$id'");
    while ($p = mysqli_fetch_array($sql)) {
        unlink("../../style/img-interfaz/img-app/" . $p['imagen_app']);
    }
    $mysqli = "DELETE apps_apps FROM apps_apps WHERE id_app='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}