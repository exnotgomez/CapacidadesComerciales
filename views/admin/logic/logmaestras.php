<?php
include("../logic/db_expresodigital.php");

/* ___________________________________add Etiqueta__________________________________  */
if (isset($_POST["btn-etiqueta"])) {
    $etiqueta = $_POST["etiqueta"];
    $vista = 5;
    if ($etiqueta != "") {
        $mysqli = "INSERT INTO maestra_etiqueta(nombre,vista)VALUES('" . $etiqueta . "','" . $vista . "')";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________edit Etiqueta__________________________________  */
if (isset($_POST["btn-edit-etiqueta"])) {
    $etiqueta = $_POST["etiqueta"];
    $id = $_POST["id"];
    if ($etiqueta != "") {
        $mysqli = "UPDATE maestra_etiqueta SET nombre='$etiqueta' WHERE maestra_etiqueta.id_etiqueta='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________delete Etiquetas__________________________________  */
if (isset($_POST["btn-eliminar-etiqueta"])) {
    $id = $_POST["id"];
    $mysqli = "DELETE maestra_etiqueta FROM maestra_etiqueta WHERE id_etiqueta='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}

/* ___________________________________add Area__________________________________  */
if (isset($_POST["btn-area"])) {
    $etiqueta = $_POST["area"];
    $vista = 5;
    if ($etiqueta != "") {
        $mysqli = "INSERT INTO maestra_area(nombre,vista)VALUES('" . $etiqueta . "','" . $vista . "')";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________edit Area__________________________________  */
if (isset($_POST["btn-edit-area"])) {
    $etiqueta = $_POST["area"];
    $id = $_POST["id"];
    if ($etiqueta != "") {
        $mysqli = "UPDATE maestra_area SET nombre='$etiqueta' WHERE maestra_area.id_area='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________delete Area__________________________________  */
if (isset($_POST["btn-eliminar-area"])) {
    $id = $_POST["id"];
    $mysqli = "DELETE FROM maestra_area WHERE id_area='$id'";
    $query = mysqli_query($conexion, $mysqli);
    echo 1;
    mysqli_close($conexion);
}

/* ___________________________________add Cargo__________________________________  */
if (isset($_POST["btn-cargo"])) {
    $etiqueta = $_POST["cargo"];
    $vista = 5;
    if ($etiqueta != "") {
        $mysqli = "INSERT INTO maestra_cargo(nombre,vista)VALUES('" . $etiqueta . "','" . $vista . "')";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}


/* ___________________________________edit Cargo__________________________________  */
if (isset($_POST["btn-edit-cargo"])) {
    $etiqueta = $_POST["cargo"];
    $id = $_POST["id"];
    if ($etiqueta != "") {
        $mysqli = "UPDATE maestra_cargo SET nombre='$etiqueta' WHERE maestra_cargo.id_cargo='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________delete Cargo__________________________________  */
if (isset($_POST["btn-eliminar-cargo"])) {
    $id = $_POST["id"];
    $mysqli = "DELETE maestra_cargo FROM maestra_cargo WHERE id_cargo='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}
/* ___________________________________add Etiqueta__________________________________  */
if (isset($_POST["btn-seccion"])) {
    $seccion = $_POST["seccion"];
    $vista = 5;
    if ($seccion != "") {
        $mysqli = "INSERT INTO maestra_seccion(nombre_seccion,vista)VALUES('" . $seccion . "','" . $vista . "')";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}
/* ___________________________________edit seccion__________________________________  */
if (isset($_POST["btn-edit-seccion"])) {
    $etiqueta = $_POST["seccion"];
    $id = $_POST["id"];
    if ($etiqueta != "") {
        $mysqli = "UPDATE maestra_seccion SET nombre_seccion='$etiqueta' WHERE maestra_seccion.id_seccion='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________delete seccion__________________________________  */
if (isset($_POST["btn-eliminar-seccion"])) {
    $id = $_POST["id"];
    $mysqli = "DELETE maestra_seccion FROM maestra_seccion WHERE id_seccion='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}
?>