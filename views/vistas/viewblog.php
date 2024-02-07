<?php
include("../admin/logic/db_expresodigital.php");
include("../consult/consultviewblog.php");
include("../consult/consultapp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/owl.carousel.min.css">
    <script src="../js/fontawesome.js"></script>
    <title>Expreso Digital</title>
    <!-- <link rel="stylesheet" href="../style/viewblogstyle.css"> -->
</head>
<style>
    <?php include "../style/viewblogstyle.css";
    ?>
</style>

<body>
    <nav class="nav-bar p-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <button class="sidebaricon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                        aria-controls="offcanvas"><i class="fa-sharp fa-solid fa-bars fa-lg"></i></button>
                </div>
                <div class="col-5">
                    <img class="img-logo" src="../style/img/img-index/logo-ExpresoDigital.png" width="190" height="60"
                        alt="">
                </div>
                <div class="col-5">
                    <form class="search">
                        <i class="fa-solid fa-chevron-left"></i>
                        <input type="search" placeholder="Buscar">
                        <div class="searchicon">
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" data-bs-keyboard="false"
        data-bs-backdrop="false" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <img class="img-logo" src="../style/img/img-index/logo-ExpresoDigital.png" width="160" height="45" alt="">
            <button class="closeicon" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-regular fa-circle-xmark fa-xl"></i></button>
        </div>
        <div class="offcanvas-body">
            <div id="sidebar">
                <div class="nav flex-column py-3">
                    <ul class="list-unstyled ps-0">
                        <li>
                            <a href="../vistas/index.php">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-house fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Inicio</label>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../vistas/blog.php">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-square-pen fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Blogs</label>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../vistas/proyectos.php">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-lightbulb fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Proyectos</label>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../vistas/equipos.php">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-users fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Equipos</label>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../vistas/aplicaciones.php">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-rocket fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Aplicativos</label>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../vistas/contactanos.html">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <i class="fa-solid fa-headset fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <label>Contactanos</label>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="back sticky-top">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <a href="../vistas/blog.php"><i class="fa-solid fa-chevron-left fa-lg"></i><label>Volver</label></a>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($consult1 as $q) {
        $etiqueta1 = $q['etiqueta1'];
        $etiqueta2 = $q['etiqueta2']; ?>

        <div class="seccion1"
            style="background-image:url('../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="content">
                            <p class="title">
                                <?php echo ($q['titulo_blog']) ?>
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="seccion2">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-start reading">
                        <i class="fa-solid fa-clock"></i> <label>
                            <?php echo ($q['lectura']) ?> min lectura
                        </label>
                    </div>
                    <div class="col-6 text-end share">
                        <!-- <i class="fa-sharp fa-solid fa-share fa-lg"></i> <a href="" type="submit" data-bs-toggle="modal"
                            data-bs-target="#Modal">Compartir articulo </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title fs-5"><i class="fa-sharp fa-solid fa-share fa-lg"></i> Compartir artículo </p>
                        <button type="button" class="closeicon" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-regular fa-circle-xmark fa-xl"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center title">
                                    <p>Comparte este artículo a través de tus redes sociales o correo</p>
                                    <br>
                                </div>
                                <div class="col-12 text-center title">
                                    <p class="subtitle"> Copia el link o comparte este artículo con el siguente enlace</p>
                                    <a href="" class="link">blognovaventa.com/Nautilius</a> <i
                                        class="fa-regular fa-copy"></i>
                                    <br><br><br>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="social1">
                                        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                        <br>
                                        <p class="text">WhastApp</p>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="social2">
                                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                                        <br>
                                        <p class="text">Enviar email</p>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="seemore" type="submit" data-bs-dismiss="modal">Cerrar</button>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="seccion3">
            <div class="container">
                <div class="row">
                    <div class="col-12 title ">
                        <p>
                            <?php echo ($q['titulo_blog']) ?>
                        </p>
                    </div>
                    <div class="col-12 text1 ">
                        <p>
                            <?php echo ($q['descripcion_blog']) ?>
                        </p>
                    </div>
                    <?php
                    if ($q['imagen_secundaria'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-12 img-b2"
                            style="background-image:url('../style/img-interfaz/img-blogs/<?php echo ($q['imagen_secundaria']) ?>');">
                        </div>
                    <?php } ?>
                    <?php if ($q['frase'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-3 col-sm-3 col-md-2 col-lg-2">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <div class="col-8 col-sm-6 col-md-5 col-lg-5 phrase">
                            <?php echo ($q['frase']) ?>
                        </div>
                        <div class="col-11 col-sm-9 col-md-7 col-lg-7 text-end by">
                            <p>-Novaventa</p>
                        </div>
                    <?php } ?>
                    <?php if ($q['contenido_blog'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-12 text1">
                            <p>
                                <?php echo ($q['contenido_blog']) ?>
                            </p>
                        </div>
                    <?php } ?>
                    <?php if ($q['url'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-12 video">
                            <iframe width="100%" height="315" src="<?php echo ($q['url']) ?>"></iframe>
                        </div>
                    <?php } ?>
                    <?php if ($q['resumen_blog'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-12 text1">
                            <p>
                                <?php echo ($q['resumen_blog']) ?>
                            </p>
                        </div>
                    <?php } ?>
                    <div class="col-12">
                        <p class="Published">Publicado: <label class="date">
                                <?php echo ($q['fecha']) ?>
                            </label></p>
                    </div>
                    <div class="col-12 labels">
                        <i class="fa-solid fa-tag"></i> <label>Etiquetas:</label>
                    </div>
                    <br><br>
                    <div class="col-auto text-center labels">
                        <button type="button" class="labels-item">
                            <?php echo ($q['etiqueta1']) ?>
                        </button>
                    </div>
                    <?php if ($q['etiqueta2'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-auto text-center labels-box">
                            <button type="button" class="labels-item">
                                <?php echo ($q['etiqueta2']) ?>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if ($q['etiqueta3'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-auto text-center labels-box">
                            <button type="button" class="labels-item">
                                <?php echo ($q['etiqueta3']) ?>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if ($q['etiqueta4'] == "") {
                        echo '';
                    } else {
                        ?>
                        <div class="col-auto text-center labels-box ">
                            <button type="button" class="labels-item">
                                <?php echo ($q['etiqueta4']) ?>
                            </button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <br>
    <div class="seccion4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-start">
                    <p class="head">Noticias relacionadas</p>
                </div>
            </div>
        </div>
        <?php

        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $consult2 = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE  etiqueta1='$etiqueta1' LIMIT 2");
                        foreach ($consult2 as $q) { ?>
                            <div class="item">
                                <div class="last">
                                    <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                        <div class="imagenes-wrapper">
                                            <img class="img-b"
                                                src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
                                            <div class="title">
                                                <p>
                                                    <?php echo ($q['titulo_blog']) ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cointainer">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="content">
                                                        <p>
                                                            <?php echo substr($q['descripcion_blog'], 0, 100); ?>...
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="exp">
                                                        <a href=""><i class="fa-solid fa-tag"></i>
                                                            <?php echo ($q['etiqueta1']) ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="date">
                                                        <p>
                                                            <?php echo ($q['fecha']) ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php }
                        $consult3 = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE  etiqueta1='$etiqueta2' LIMIT 2");
                        foreach ($consult3 as $q) { ?>
                            <div class="item">
                                <div class="last">
                                    <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                        <div class="imagenes-wrapper">
                                            <img class="img-b"
                                                src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
                                            <div class="title">
                                                <p>
                                                    <?php echo ($q['titulo_blog']) ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cointainer">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="content">
                                                        <p>
                                                            <?php echo substr($q['descripcion_blog'], 0, 110); ?>...
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="exp">
                                                        <a href=""><i class="fa-solid fa-tag"></i>
                                                            <?php echo ($q['etiqueta1']) ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="date">
                                                        <p>
                                                            <?php echo ($q['fecha']) ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-10 text-start">
                    <div class="title">
                        <i class="fa-solid fa-rocket fa-lg"></i> &nbsp; <label for="">APPS</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="down text-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <div class="fa-down">
                                <i class="fa-solid fa-angle-down "></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-12 text-start">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <div class="line text-center">
                                    </div>
                                </div>
                                <div class="col-10 text-start">
                                    <div class="apps">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($consultApp2 as $q) { ?>
                                                    <div class="col-sm-12 col-md-6 col-lg-2">
                                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                            <li class="nav-item">
                                                                <p class="title">
                                                                    <?php echo ($q['seccion_app']) ?>
                                                                </p>
                                                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                                <?php
                                                                    $aplicaciones = explode("\n", $q['aplicaciones']);
                                                                    foreach ($aplicaciones as $aplicacion) {
                                                                        list($nombre, $id) = explode(" ", $aplicacion);
                                                                        $query = "SELECT * FROM apps_apps WHERE nombre_app = '$nombre' AND id_app = '$id' ";
                                                                        $result = mysqli_query($conexion, $query);
                                                                        $row = mysqli_fetch_assoc($result);
                                                                        $url = $row['url_app'];
                                                                        if (!empty($nombre)) {
                                                                            echo "<li class='nav-item'><a class='contenidoApps' href=" . $url . " target='_blank'><h6>" . $nombre . "</h6></a></li>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <div class="hr"></div>
                </div>
                <br><br>
                <div class="col-6 text-center">
                    <img src="../style/img/img-index/logo-novaventa.png" alt=" logo">
                </div>
                <div class="col-6 text-center">
                    <img src="../style/img/img-index/logo-nutresa.png" alt=" logo">
                </div>
            </div>
        </div>
        <br><br>
        <div class="copyright">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa-sharp fa-regular fa-copyright fa-xl"></i>
                        <label for="">COPYRIGHT 2023
                            NOVAVENTA S.A.S.
                            <br>
                            TODOS
                            LOS DERECHOS RESERVADOS</label>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            margin: 15,
            autoplay: false,
            autoplayTimeout: 2000,
            responsive: {
                400: {
                    items: 1.1
                },
                750: {
                    items: 2.1
                },
                1000: {
                    items: 3.1
                }
            }
        });
    </script>
</body>


</html>