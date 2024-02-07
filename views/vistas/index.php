<?php
include("../admin/logic/db_expresodigital.php");
include("../consult/consultindex.php");
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
    <!-- <link rel="stylesheet" href="../style/indexstyle.css"> -->
</head>
<style>
    <?php include "../style/indexstyle.css";
    ?>
</style>

<body>
    <nav class="nav-bar fixed-top p-2">
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
    <br><br><br>
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
                                            <label>Inicio </label>
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
    <?php foreach ($consult3 as $q) { ?>
        <div class="seccion1" style="background-image:url('../style/img-interfaz/index/<?php echo ($q['valor']) ?>');">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                    <div class="content">
                        <?php foreach ($consult1 as $q) { ?>
                            <p class="title">
                                <?php echo $q['valor']; ?>
                            </p>
                        <?php } ?>
                        <?php foreach ($consult2 as $q) { ?>
                            <p class="subtitle">
                                <?php echo $q['valor']; ?>
                            </p>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="seccion2">
        <div class="container">
            <div class="row">
                <div class="col-6 text-start">
                    <div class="one">
                        <p>Últimas noticias</p>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <a href="../vistas/blog.php"><button class="vertodo" type="submit">Ver todos</button></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        foreach ($consult6 as $q) { ?>
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
                                                        <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>"><i
                                                                class="fa-solid fa-tag"></i>
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
    <div class="seccion3">
        <div class="container">
            <div class="row">
                <div class="col-6 text-start">
                    <div class="one">
                        <p>Proyectos</p>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <a href="../vistas/proyectos.php"><button class="vertodo" type="submit">Ver todos</button></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($consult5 as $q) { ?>
                            <div class="item">
                                <div class="last">
                                    <div class="imagenes-wrapper">
                                        <img class="img-b"
                                            src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                                        <div class="title">
                                            <h3>
                                                <?php echo $q['titulo_proyecto']; ?>
                                            </h3>
                                        </div>
                                        <div class="more">
                                            <button class="seemore" type="submit" data-bs-toggle="modal"
                                                data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                                                más</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($consult5 as $q) { ?>
        <!-- Modal -->
        <div class="modal fade" id="Modal<?php echo ($q['id_proyecto']) ?>" tabindex="-1" aria-labelledby="Modal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5"><i class="fa-solid fa-lightbulb"></i>
                            Proyecto
                            <?php echo $q['titulo_proyecto']; ?>
                        </h1>
                        <button type="button" class="closeicon" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-regular fa-circle-xmark fa-xl"></i></button>
                    </div>
                    <div class="img-m"
                        style="background-image:url('../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>');">
                    </div>
                    <div class="modal-body">
                        <div class="content-m">
                            <p class="title-m">Descripcion del proyecto</p>
                            <p class="description-m">
                                <?php echo $q['descripcion_proyecto']; ?>
                            </p>
                            <h5 class="subtitle-m">Valor agregado aportado a la organizacion
                            </h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <p class="skills">
                                            <?php echo '<i class="fa-solid fa-check "></i> ' . $q['caracteristica1']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <p class="skills">
                                            <?php if ($q['caracteristica2'] == "") {
                                                echo '';
                                            } else {
                                                echo '<i class="fa-solid fa-check "></i> ' . $q['caracteristica2'];
                                            } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <p class="skills">
                                            <?php if ($q['caracteristica3'] == "") {
                                                echo '';
                                            } else {
                                                echo '<i class="fa-solid fa-check "></i> ' . $q['caracteristica3'];
                                            } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <br>
    <div class="seccion4">
        <div class="container">
            <div class="row">
                <div class="col-6 text-start">
                    <div class="one">
                        <p>Equipos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($consult4 as $q) { ?>
                    <div class="col-12 team"
                        style="background-image:url('../style/img-interfaz/index/<?php echo ($q['valor']) ?>');">
                    <?php } ?>
                    <div class="team-wrapper">
                        <div class="title">
                            <h3>Quienes lo hacen posible</h3>
                        </div>
                        <div class="more">
                            <a href="../vistas/equipos.php"><button class="seemore" type="submit">Conoce
                                    nuestros
                                    equipos</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
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
            autoplay: true,
            autoplayTimeout: 4500,
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