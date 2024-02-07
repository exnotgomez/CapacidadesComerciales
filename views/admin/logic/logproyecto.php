<?php
include("../logic/db_expresodigital.php");

/* ___________________________________Titulo pricipal__________________________________  */
if (isset($_POST["btn-titulo"])) {
    $id = "1";
    $titulo = $_POST["titulo_principal"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_proyecto SET valor='$titulo' WHERE interfaz_proyecto.id_contenido='$id'";
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
            $ruta = '../../style/img-interfaz/proyectos/' . $cont . $archivo;
            $id = "2";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_proyecto WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/proyectos/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_proyecto SET valor='$cont$archivo' WHERE interfaz_proyecto.id_contenido='$id'";
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
        $mysqli = "UPDATE interfaz_proyecto SET valor='$subtitulo' WHERE interfaz_proyecto.id_contenido='$id'";
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
        $mysqli = "UPDATE interfaz_proyecto SET valor='$descripcion' WHERE interfaz_proyecto.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________proyecto__________________________________  */
if (isset($_POST['btn-proyecto'])) {
    $titulo = $_POST["titulo-principal"];
    $archivo = $_FILES['imagen']['name'];
    $prioridad = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $caracteristica1 = $_POST["caracteristica1"];
    $caracteristica2 = $_POST["caracteristica2"];
    $caracteristica3 = $_POST["caracteristica3"];
    $vista = 3;

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
            $ruta = '../../style/img-interfaz/img-proyectos/' . $cont . $archivo;
            if (move_uploaded_file($temp, $ruta)) {
                $mysqli = "INSERT INTO proyecto_proyectos(titulo_proyecto,descripcion_proyecto,imagen_proyecto,tipo,caracteristica1,	caracteristica2,caracteristica3,vista)VALUES('" . $titulo . "','" . $descripcion . "','" . $cont . $archivo . "','" . $prioridad . "','" . $caracteristica1 . "','" . $caracteristica2 . "','" . $caracteristica3 . "','" . $vista . "')";
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
    $titulo = $_POST["titulo-principal"];
    $img = $_POST["img"];
    $archivo = $_FILES['imagen']['name'];
    $prioridad = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $caracteristica1 = $_POST["caracteristica1"];
    $caracteristica2 = $_POST["caracteristica2"];
    $caracteristica3 = $_POST["caracteristica3"];
    $vista = 3;
    if ($titulo != "" || $descripcion != "" || $caracteristica1 != "") {
        if ($archivo == "") {
            $mysqli = "UPDATE proyecto_proyectos SET titulo_proyecto='$titulo',descripcion_proyecto='$descripcion',imagen_proyecto='$img',tipo='$prioridad',caracteristica1='$caracteristica1',caracteristica2='$caracteristica2',caracteristica3='$caracteristica3' WHERE proyecto_proyectos.id_proyecto='$id'";
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
                $ruta = '../../style/img-interfaz/img-proyectos/' . $cont . $archivo;
                if (move_uploaded_file($temp, $ruta)) {
                    $sql = mysqli_query($conexion, "SELECT imagen_proyecto FROM proyecto_proyectos WHERE id_proyecto='$id'");
                    while ($p = mysqli_fetch_array($sql)) {
                        unlink('../../style/img-interfaz/img-proyectos/' . $p['imagen_proyecto']);
                    }
                    $mysqli = "UPDATE proyecto_proyectos SET titulo_proyecto='$titulo',descripcion_proyecto='$descripcion',imagen_proyecto='$cont$archivo',tipo='$prioridad',caracteristica1='$caracteristica1',caracteristica2='$caracteristica2',caracteristica3='$caracteristica3' WHERE proyecto_proyectos.id_proyecto='$id'";
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

/* ___________________________________colaborador eliminar__________________________________  */
if (isset($_POST["eliminar-proyecto"])) {
    $id = $_POST["id"];
    $sql = mysqli_query($conexion, "SELECT imagen_proyecto FROM proyecto_proyectos WHERE id_proyecto='$id'");
    while ($p = mysqli_fetch_array($sql)) {
        unlink("../../style/img-interfaz/img-proyectos/" . $p['imagen_proyecto']);
    }
    $mysqli = "DELETE proyecto_proyectos FROM proyecto_proyectos WHERE id_proyecto='$id'";
    $query = mysqli_query($conexion, $mysqli);
    mysqli_close($conexion);
    echo 1;
}


?>