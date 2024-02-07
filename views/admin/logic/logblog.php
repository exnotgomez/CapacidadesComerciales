<?php
include("../logic/db_expresodigital.php");

/* ___________________________________Titulo pricipal__________________________________  */
if (isset($_POST["btn-titulo"])) {
    $id = "1";
    $titulo = $_POST["titulo_principal"];
    $mysqli = "UPDATE interfaz_blog SET valor='$titulo' WHERE interfaz_blog.id_contenido ='$id'";
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_blog SET valor='$titulo' WHERE interfaz_blog.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}


/* ___________________________________Subtitulo pricipal__________________________________  */
if (isset($_POST["btn-subtitulo-principal"])) {
    $id = "2";
    $titulo = $_POST["subtitulo_principal"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_blog SET valor='$titulo' WHERE interfaz_blog.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________imagen principal__________________________________  */
if (isset($_POST['btn-img'])) {
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
            $ruta = '../../style/img-interfaz/blog/' . $cont . $archivo;
            $id = "3";
            if (move_uploaded_file($temp, $ruta)) {
                $sql = mysqli_query($conexion, "SELECT valor FROM interfaz_blog WHERE id_contenido='$id'");
                while ($p = mysqli_fetch_array($sql)) {
                    unlink('../../style/img-interfaz/blog/' . $p['valor']);
                }
                $mysqli = "UPDATE interfaz_blog SET valor='$cont$archivo' WHERE interfaz_blog.id_contenido='$id'";
                $query = mysqli_query($conexion, $mysqli);
                echo 1;
                mysqli_close($conexion);
            }
        }
    }
}

/* ___________________________________Subtitulo secundario__________________________________  */
if (isset($_POST["btn-subtitulo"])) {
    $id = "4";
    $titulo = $_POST["subtitulo"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_blog SET valor='$titulo' WHERE interfaz_blog.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________Descripcion__________________________________  */
if (isset($_POST["btn-descripcion"])) {
    $id = "5";
    $titulo = $_POST["descripcion"];
    if ($titulo != "") {
        $mysqli = "UPDATE interfaz_blog SET valor='$titulo' WHERE interfaz_blog.id_contenido='$id'";
        $query = mysqli_query($conexion, $mysqli);
        if ($query) {
            echo 1;
            mysqli_close($conexion);
        }
    }
}

/* ___________________________________Añadir blog__________________________________  */

if (isset($_POST['btn-blog'])) {
    $titulo = $_POST["titulo-principal"];
    $archivo1 = $_FILES['imagen_principal']['name'];
    $archivo2 = $_FILES['imagen_secundaria']['name'];
    $lectura = $_POST["lectura"];
    $frase = $_POST["frase"];
    $descripcion = $_POST["descripcion"];
    $contenido = $_POST["contenido"];
    $url = $_POST["url"];
    $fecha = date("Y-m-d");
    $resumen = $_POST["resumen"];
    $etiqueta = $_POST["etiqueta_Principal"];
    $opciones = $_POST["opciones"];
    $vista = 2;
    $cantidad_opciones = count($opciones);
    if ($cantidad_opciones >= 1) {
        $opcion1 = $opciones[0];
    } else {
        $opcion1 = "";
    }
    if ($cantidad_opciones >= 2) {
        $opcion2 = $opciones[1];
    } else {
        $opcion2 = "";
    }
    if ($cantidad_opciones >= 3) {
        $opcion3 = $opciones[2];
    } else {
        $opcion3 = "";
    }
    if ($lectura == "") {
        $lectura = 5;
    }
    $tipo1 = $_FILES['imagen_principal']['type'];
    $tamano1 = $_FILES['imagen_principal']['size'];
    $temp1 = $_FILES['imagen_principal']['tmp_name'];
    $tipo2 = $_FILES['imagen_secundaria']['type'];
    $tamano2 = $_FILES['imagen_secundaria']['size'];
    $temp2 = $_FILES['imagen_secundaria']['tmp_name'];
    if ($titulo != "" && $archivo1 != "" && $descripcion != "" && $etiqueta != "" && $opciones != "") {
        if (isset($archivo1) && $archivo1 != "" && $archivo2 != "") {
            if (!((strpos($tipo1, "gif") || strpos($tipo1, "jpeg") || strpos($tipo1, "jpg") || strpos($tipo1, "png"))) || !((strpos($tipo2, "gif") || strpos($tipo2, "jpeg") || strpos($tipo2, "jpg") || strpos($tipo2, "png")))) {
                echo 2;
            } else if ($tamano1 > 3000000 || $tamano2 > 3000000) {
                echo 3;
            } else {
                $cont1 = rand(100, 999);
                $cont2 = rand(100, 999);
                $ruta1 = '../../style/img-interfaz/img-blogs/' . $cont1 . $archivo1;
                $ruta2 = '../../style/img-interfaz/img-blogs/' . $cont2 . $archivo2;
                $move1 = move_uploaded_file($temp1, $ruta1);
                $move2 = move_uploaded_file($temp2, $ruta2);
                if ($move1 == true && $move2 == true) {
                    $mysqli = "INSERT INTO blog_blogs(titulo_blog,imagen_blog,descripcion_blog,	imagen_secundaria,frase,contenido_blog,url,resumen_blog,lectura,fecha,etiqueta1,etiqueta2,etiqueta3,etiqueta4,vista)VALUES('" . $titulo . "','" . $cont1 . $archivo1 . "','" . $descripcion . "','" . $cont2 . $archivo2 . "','" . $frase . "','" . $contenido . "','" . $url . "','" . $resumen . "','" . $lectura . "','" . $fecha . "','" . $etiqueta . "','" . $opcion1 . "','" . $opcion2 . "','" . $opcion3 . "','" . $vista . "')";
                    $query = mysqli_query($conexion, $mysqli);
                    mysqli_close($conexion);
                    echo 1;
                }
            }
        } else {
            if (!((strpos($tipo1, "gif") || strpos($tipo1, "jpeg") || strpos($tipo1, "jpg") || strpos($tipo1, "png")))) {
                echo 2;
            } else if ($tamano1 > 3000000) {
                echo 3;
            } else {
                $cont = rand(100, 999);
                $ruta1 = '../../style/img-interfaz/img-blogs/' . $cont . $archivo1;
                $move1 = move_uploaded_file($temp1, $ruta1);
                if ($move1 == true) {
                    $mysqli = "INSERT INTO blog_blogs(titulo_blog,imagen_blog,descripcion_blog,	imagen_secundaria,frase,contenido_blog,url,resumen_blog,lectura,fecha,etiqueta1,etiqueta2,etiqueta3,etiqueta4,vista)VALUES('" . $titulo . "','" . $cont . $archivo1 . "','" . $descripcion . "','" . $archivo2 . "','" . $frase . "','" . $contenido . "','" . $url . "','" . $resumen . "','" . $lectura . "','" . $fecha . "','" . $etiqueta . "','" . $opcion1 . "','" . $opcion2 . "','" . $opcion3 . "','" . $vista . "')";
                    $query = mysqli_query($conexion, $mysqli);
                    mysqli_close($conexion);
                    echo 1;
                }
            }
        }
    }
}


/* ___________________________________blog edit__________________________________  */
if (isset($_POST['btn-edit'])) {
    $id = $_POST["id"];
    $titulo = $_POST["titulo_principal"];
    $img_principal = $_POST["img_principal"];
    $imagen_principal = $_FILES['imagen_principal']['name'];
    $img_secundaria = $_POST["img_secundaria"];
    $imagen_secundaria = $_FILES['imagen_secundaria']['name'];
    $lectura = $_POST["lectura"];
    $frase = $_POST["frase"];
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $contenido = $_POST["contenido"];
    $url = $_POST["url"];
    $resumen = $_POST["resumen"];
    $etiqueta1 = $_POST["etiqueta1"];
    $etiqueta2 = $_POST["etiqueta2"];
    $etiqueta3 = $_POST["etiqueta3"];
    $etiqueta4 = $_POST["etiqueta4"];
    if ($titulo != "" || $contenido != "") {
        if ($imagen_principal == "" && $imagen_secundaria == "") {
            $mysqli = "UPDATE blog_blogs SET titulo_blog='$titulo',imagen_blog='$img_principal',descripcion_blog='$descripcion',imagen_secundaria='$img_secundaria',frase='$frase',contenido_blog='$contenido',url='$url',resumen_blog='$resumen',lectura='$lectura',fecha='$fecha',etiqueta1='$etiqueta1',etiqueta2='$etiqueta2',etiqueta3='$etiqueta3',etiqueta4='$etiqueta4' WHERE blog_blogs.id_blog ='$id'";
            $query = mysqli_query($conexion, $mysqli);
            if ($query) {
                echo 1;
                mysqli_close($conexion);
            }
        } else {
            $tipo1 = $_FILES['imagen_principal']['type'];
            $tamano1 = $_FILES['imagen_principal']['size'];
            $temp1 = $_FILES['imagen_principal']['tmp_name'];
            $tipo2 = $_FILES['imagen_secundaria']['type'];
            $tamano2 = $_FILES['imagen_secundaria']['size'];
            $temp2 = $_FILES['imagen_secundaria']['tmp_name'];

            if (isset($imagen_principal) && $imagen_secundaria == "") {
                if (!((strpos($tipo1, "gif") || strpos($tipo1, "jpeg") || strpos($tipo1, "jpg") || strpos($tipo1, "png")))) {
                    echo 2;
                } else if ($tamano1 > 3000000) {
                    echo 3;
                } else {
                    $cont1 = rand(100, 999);
                    $ruta1 = '../../style/img-interfaz/img-blogs/' . $cont1 . $imagen_principal;
                    $move1 = move_uploaded_file($temp1, $ruta1);
                    if ($move1 == true) {
                        $sql = mysqli_query($conexion, "SELECT imagen_blog FROM blog_blogs WHERE id_blog='$id'");
                        while ($p = mysqli_fetch_array($sql)) {
                            unlink('../../style/img-interfaz/img-blogs/' . $p['imagen_blog']);
                        }
                        $mysqli = "UPDATE blog_blogs SET titulo_blog='$titulo',imagen_blog='$cont1$imagen_principal',descripcion_blog='$descripcion',imagen_secundaria='$img_secundaria',frase='$frase',contenido_blog='$contenido',url='$url',resumen_blog='$resumen',lectura='$lectura',fecha='$fecha',etiqueta1='$etiqueta1',etiqueta2='$etiqueta2',etiqueta3='$etiqueta3',etiqueta4='$etiqueta4' WHERE blog_blogs.id_blog ='$id'";
                        $query = mysqli_query($conexion, $mysqli);
                        mysqli_close($conexion);
                        if ($query) {
                            echo 1;
                        }
                    }
                }
            } else if (isset($imagen_secundaria) && $imagen_principal == "") {
                if (!((strpos($tipo2, "gif") || strpos($tipo2, "jpeg") || strpos($tipo2, "jpg") || strpos($tipo2, "png")))) {
                    echo 2;
                } else if ($tamano2 > 3000000) {
                    echo 3;
                } else {
                    $cont2 = rand(100, 999);
                    $ruta2 = '../../style/img-interfaz/img-blogs/' . $cont2 . $imagen_secundaria;
                    $move2 = move_uploaded_file($temp2, $ruta2);
                    if ($move2 == true) {
                        $sql = mysqli_query($conexion, "SELECT imagen_secundaria FROM blog_blogs WHERE id_blog='$id'");
                        while ($p = mysqli_fetch_array($sql)) {
                            unlink('../../style/img-interfaz/img-blogs/' . $p['imagen_secundaria']);
                        }
                        $mysqli = "UPDATE blog_blogs SET titulo_blog='$titulo',imagen_blog='$img_principal',descripcion_blog='$descripcion',imagen_secundaria='$cont2$imagen_secundaria',frase='$frase',contenido_blog='$contenido',url='$url',resumen_blog='$resumen',lectura='$lectura',fecha='$fecha',etiqueta1='$etiqueta1',etiqueta2='$etiqueta2',etiqueta3='$etiqueta3',etiqueta4='$etiqueta4' WHERE blog_blogs.id_blog ='$id'";
                        $query = mysqli_query($conexion, $mysqli);
                        mysqli_close($conexion);
                        if ($query) {
                            echo 1;
                        }
                    }
                }
            } else if (isset($imagen_principal) && isset($imagen_secundaria)) {
                if (!((strpos($tipo1, "gif") || strpos($tipo1, "jpeg") || strpos($tipo1, "jpg") || strpos($tipo1, "png"))) || !((strpos($tipo2, "gif") || strpos($tipo2, "jpeg") || strpos($tipo2, "jpg") || strpos($tipo2, "png")))) {
                    echo 2;
                } else if ($tamano1 > 3000000 || $tamano2 > 3000000) {
                    echo 3;
                } else {
                    $cont1 = rand(100, 999);
                    $cont2 = rand(100, 999);
                    $ruta1 = '../../style/img-interfaz/img-blogs/' . $cont1 . $imagen_principal;
                    $ruta2 = '../../style/img-interfaz/img-blogs/' . $cont2 . $imagen_secundaria;
                    $move1 = move_uploaded_file($temp1, $ruta1);
                    $move2 = move_uploaded_file($temp2, $ruta2);
                    if ($move1 == true && $move2 == true) {
                        $sql1 = mysqli_query($conexion, "SELECT imagen_blog FROM blog_blogs WHERE id_blog='$id'");
                        while ($p1 = mysqli_fetch_array($sql1)) {
                            unlink('../../style/img-interfaz/img-blogs/' . $p1['imagen_blog']);
                        }
                        $sql2 = mysqli_query($conexion, "SELECT imagen_secundaria FROM blog_blogs WHERE id_blog='$id'");
                        while ($p2 = mysqli_fetch_array($sql2)) {
                            unlink('../../style/img-interfaz/img-blogs/' . $p2['imagen_secundaria']);
                        }
                        $mysqli = "UPDATE blog_blogs SET titulo_blog='$titulo',imagen_blog='$cont1$imagen_principal',descripcion_blog='$descripcion',imagen_secundaria='$cont2$imagen_secundaria',frase='$frase',contenido_blog='$contenido',url='$url',resumen_blog='$resumen',lectura='$lectura',fecha='$fecha',etiqueta1='$etiqueta1',etiqueta2='$etiqueta2',etiqueta3='$etiqueta3',etiqueta4='$etiqueta4' WHERE blog_blogs.id_blog ='$id'";
                        $query = mysqli_query($conexion, $mysqli);
                        mysqli_close($conexion);
                        if ($query) {
                            echo 1;
                        }
                    }
                }
            }
        }
    }
}



/* ___________________________________eliminar blog__________________________________  */
if (isset($_POST["eliminar-blog"])) {
    $id = $_POST["id"];
    $img1 = $_POST["img1"];
    $img2 = $_POST["img2"];
    if($img1 != "" && $img2 != ""){
        $sql1 = mysqli_query($conexion, "SELECT imagen_blog FROM blog_blogs WHERE id_blog='$id'");
        while ($p1 = mysqli_fetch_array($sql1)) {
            unlink("../../style/img-interfaz/img-blogs/" . $p1['imagen_blog']);
        }
        $sql2 = mysqli_query($conexion, "SELECT imagen_secundaria FROM blog_blogs WHERE id_blog='$id'");
        while ($p2 = mysqli_fetch_array($sql2)) {
            unlink("../../style/img-interfaz/img-blogs/" . $p2['imagen_secundaria']);
        }

    }else if ($img1 != "") {
        $sql1 = mysqli_query($conexion, "SELECT imagen_blog FROM blog_blogs WHERE id_blog='$id'");
        while ($p1 = mysqli_fetch_array($sql1)) {
            unlink("../../style/img-interfaz/img-blogs/" . $p1['imagen_blog']);
        }
    } else if ($img2 != "") {
        $sql2 = mysqli_query($conexion, "SELECT imagen_secundaria FROM blog_blogs WHERE id_blog='$id'");
        while ($p2 = mysqli_fetch_array($sql2)) {
            unlink("../../style/img-interfaz/img-blogs/" . $p2['imagen_secundaria']);
        }
    }
    $mysqli = "DELETE blog_blogs FROM blog_blogs WHERE id_blog='$id'";
    $query = mysqli_query($conexion, $mysqli);
    if ($query) {
        echo 1;
        mysqli_close($conexion);
    }
}
?>