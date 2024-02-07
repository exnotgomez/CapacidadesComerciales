<?php
include("../logic/db_expresodigital.php");

/* ___________________________________Titulo pricipal__________________________________  */
if (isset($_POST["btn-titulo"])) {
    $id = "1";
    $titulo = $_POST["titulo_principal"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_equipo SET valor='$titulo' WHERE interfaz_equipo.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________imagen principal__________________________________  */
if (isset($_POST['btn-img'])) {
    $archivo = $_FILES['img_principal']['name'];
    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['img_principal']['type'];
        $tamano = $_FILES['img_principal']['size'];
        $temp = $_FILES['img_principal']['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo 2;
        } else if ($tamano > 3000000) {
            echo 3;
        } else {
            $cont = rand(100, 999);
            $ruta = '../../style/img-interfaz/equipo/' . $cont . $archivo;
            $id = "2";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_equipo WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/equipo/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_equipo SET valor='$cont$archivo' WHERE interfaz_equipo.id_contenido='$id'";
                $query = mysqli_query($conexion, $mysqli);
                echo 1;
                mysqli_close($conexion);
            }
        }
    }
}

/* ___________________________________add colaborador__________________________________  */
if (isset($_POST['btn-colaborador'])) {
    $nombre = $_POST["nombre"];
    $archivo = $_FILES['imagen']['name'];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $area = $_POST["area"];
    $cargo = $_POST["cargo"];
    $refran = $_POST["refran"];
    $vista = 4;
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
            $ruta = '../../style/img-interfaz/img-colaboradores/' . $cont . $archivo;
            if (move_uploaded_file($temp, $ruta)) {
                $mysqli = "INSERT INTO equipo_colaboradores(nombre_colaborador,area,cargo,refran,correo,celular,imagen,vista)VALUES('" . $nombre . "','" . $area . "','" . $cargo . "','" . $refran . "','" . $correo . "','" . $numero . "','" . $cont . $archivo . "','" . $vista . "')";
                $query = mysqli_query($conexion, $mysqli);
                mysqli_close($conexion);
                echo 1;
            }
        }
    }
}


/* ___________________________________colaborador edit__________________________________  */
if (isset($_POST['btn-edit'])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $archivo = $_FILES['imagen']['name'];
    $imagen = $_POST["img"];
    $area = $_POST["area"];
    $cargo = $_POST["cargo"];
    $refran = $_POST["refran"];
    $vista = 4;

    if ($nombre != "" || $correo != "" || $area != "" || $cargo != "") {
        if ($archivo == "") {
            $mysqli = "UPDATE equipo_colaboradores SET nombre_colaborador='$nombre',area='$area',cargo='$cargo',refran='$refran',correo='$correo',celular='$numero',imagen='$imagen',vista='$vista' WHERE equipo_colaboradores.id_equipo='$id'";
            $query = mysqli_query($conexion, $mysqli);
            mysqli_close($conexion);
            echo 1;
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
                $ruta = '../../style/img-interfaz/img-colaboradores/' . $cont . $archivo;
                if (move_uploaded_file($temp, $ruta)) {
                    $sql = mysqli_query($conexion, "SELECT imagen FROM equipo_colaboradores WHERE id_equipo='$id'");
                    while ($p = mysqli_fetch_array($sql)) {
                        unlink('../../style/img-interfaz/img-colaboradores/' . $p['imagen']);
                    }
                    $mysqli = "UPDATE equipo_colaboradores SET nombre_colaborador='$nombre',area='$area',cargo='$cargo',refran='$refran',correo='$correo',celular='$numero',imagen='$cont$archivo',vista='$vista' WHERE equipo_colaboradores.id_equipo='$id'";
                    $query = mysqli_query($conexion, $mysqli);
                    mysqli_close($conexion);
                    echo 1;
                }
            }
        }
    }
}
/* ___________________________________colaborador eliminar__________________________________  */
if (isset($_POST["eliminar-colaborador"])) {
    $id = $_POST["id"];
    $sql = mysqli_query($conexion, "SELECT imagen FROM equipo_colaboradores WHERE id_equipo='$id'");
    while ($p = mysqli_fetch_array($sql)) {
        unlink("../../style/img-interfaz/img-colaboradores/" . $p['imagen']);
    }
    $mysqli = "DELETE equipo_colaboradores FROM equipo_colaboradores WHERE id_equipo='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}

?>