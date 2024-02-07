<?php
include("../admin/logic/db_expresodigital.php");
include("../consult/consultblog.php");
include("../consult/consultmaestras.php");
include("../consult/consultapp.php");
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../style/css/bootstrap.min.css">
<script src="../js/fontawesome.js"></script>
<title>Expreso Digital</title>
<!-- <link rel="stylesheet" href="../style/blogstyle.css"> -->
</head>
<style>
    <?php include "../style/blogstyle.css";
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
                    <a href="../vistas/index.php"><i
                            class="fa-solid fa-chevron-left fa-lg"></i><label>Volver</label></a>
                </div>
            </div>
        </div>
    </div>

    <?php foreach ($consult3 as $q) { ?>
        <div class="seccion1" style="background-image:url('../style/img-interfaz/blog/<?php echo ($q['valor']) ?>');">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <div class="content">
                        <?php foreach ($consult1 as $q) { ?>
                            <p class="title">
                                <?php echo ($q['valor']) ?>
                            </p>
                        <?php } ?>
                        <?php foreach ($consult2 as $q) { ?>
                            <p class="subtitle">
                                <?php echo ($q['valor']) ?>
                            </p>
                        <?php } ?>
                        <br>
                    </div>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="seccion2">
        <div class="container">
            <div class="row">
                <div class="col-12 first">
                    <?php foreach ($consult4 as $q) { ?>
                        <p class="title">
                            <?php echo ($q['valor']) ?>
                        </p>
                    <?php } ?>
                    <?php foreach ($consult5 as $q) { ?>
                        <p class="text">
                            <?php echo ($q['valor']) ?>
                        </p>
                    <?php } ?>
                </div>
                <?php foreach ($consult6 as $q) {
                    $id_blog = $q['id_blog'];
                } ?>
            </div>
        </div>
    </div>
    <div class="seccion3">
        <div class="container">
            <div class="col-12 text-start">
                <div class="btn-group ">
                    <button class="select" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Etiquetas <i class="fa-solid fa-angle-down "></i>
                    </button>
                    <ul class="dropdown-menu">
                        <?php foreach ($consultEtiqueta as $q) { ?>
                            <li>
                                <button type="button" class="dropdown-item" id="etiqueta"
                                    name="<?php echo $q['nombre']; ?>">
                                    <?php echo $q['nombre']; ?>
                                </button>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="select" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar <i class="fa-solid fa-angle-down "></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="dropdown-item recientes" name="recientes" id="recientes"
                                type="button">Recientes</button>
                        </li>
                        <li>
                            <button class="dropdown-item antiguos" name="antiguos" id="antiguos"
                                type="button">Antiguos</button>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="select" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Año <i class="fa-solid fa-angle-down "></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="dropdown-item year2023" name="year2023" id="year2023"
                                type="button">2023</button>
                        </li>
                        <li>
                            <button class="dropdown-item year2022" name="year2022" id="year2022"
                                type="button">2024</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" id="listarblogs">
                <div class="col-12 text-end" >
                    <br>
                    <p class="result" >
                        <?php echo $consult7_1 ?> resultados
                    </p>
                </div>
                <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
                <?php foreach ($consult6 as $q) {
                    $id_blog = $q['id_blog']; ?>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="last">
                            <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                <div class="imagenes-wrapper">
                                    <img class="img-b"
                                        src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
                                    <div class="title">
                                        <p>
                                            <?php echo $q['titulo_blog']; ?>
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
                                                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>"><i
                                                        class="fa-solid fa-tag"></i>
                                                    <?php echo $q['etiqueta1']; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="date">
                                                <p>
                                                    <?php echo $q['fecha']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <br>
                    </div>
                <?php } ?>
                <div class="col-12 text-center">
                    <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                        <button class="seemore" type="submit" id="<?php echo $id_blog; ?>">Ver más</button>
                    </div>
                </div>
                <div class="row" id="addblogs">
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
    <script src="../js/scripts/fuction_blog.js"></script>
</body>

</html>