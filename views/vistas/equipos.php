<?php
include("../admin/logic/db_expresodigital.php");
include("../consult/consultequipo.php");
include("../consult/consultmaestras.php");
include("../consult/consultapp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <script src="../js/fontawesome.js"></script>
    <title>Expreso Digital</title>
    <!-- <link rel="stylesheet" href="../style/equiposstyle.css"> -->
</head>
<style>
    <?php include "../style/equiposstyle.css";
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
    <?php foreach ($consult2 as $q) { ?>
        <div class="seccion1" style="background-image:url('../style/img-interfaz/equipo/<?php echo ($q['valor']) ?>');">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-8 ">
                    <div class="content">
                        <?php foreach ($consult1 as $q) { ?>
                            <h1>
                                <?php echo $q['valor']; ?>
                            </h1>
                        <?php } ?>
                        <br>
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="seccion2">
        <div class="container">
            <?php foreach ($consult5 as $q) { ?>
                <div class="row content">
                    <div class="col-3 content1"
                        style="background-image:url('../style/img-interfaz/img-colaboradores/<?php echo ($q['imagen']) ?>');">
                    </div>
                    <div class="col-9 content2">
                        <div class="container content3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-5">
                                    <div class="title">
                                        <h5 class="name">
                                            <?php echo $q['nombre_colaborador']; ?>
                                        </h5>
                                        <p class="job">
                                            <?php echo $q['cargo']; ?>
                                        </p>
                                    </div>
                                    <div class="contact">
                                        <i class="fa-solid fa-envelope "></i> &nbsp;<label>
                                            <?php echo $q['correo']; ?>
                                        </label>
                                        <br>
                                        <i class="fa-solid fa-phone "></i> &nbsp;<label>
                                            <?php echo $q['celular']; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-7">
                                    <p class="text">
                                        "<?php echo $q['refran']; ?>"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>
        </div>
    </div>
    <br><br>
    <div class="seccion3">
        <div class="container text-center">
            <div class="row">
                <?php foreach ($consultArea as $q) { ?>
                    <div class="col-4 cargos">
                        <button type="submit" class="areas" id="areas<?php echo $q['id_area']; ?>"
                            name="<?php echo $q['nombre']; ?>">
                            <?php echo $q['nombre']; ?>
                        </button>
                    </div>
                    <br><br>
                <?php } ?>
            </div>
        </div>
    </div>
    <br>

    <div class="seccion4">
        <div class="container">
            <div class="row" id="listarcolaboradores">
                <div class="col-12 my-4">
                    <div class="container">
                        <?php foreach ($consult6 as $q) { ?>
                            <div class="row content">
                                <div class="col-3 imgp-1"
                                    style="background-image:url('../style/img-interfaz/img-colaboradores/<?php echo ($q['imagen']) ?>');">
                                </div>
                                <div class="col-9 content2">
                                    <div class="container content3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-5">
                                                <div class="title">
                                                    <h5 class="name">
                                                        <?php echo $q['nombre_colaborador']; ?>
                                                    </h5>
                                                    <p class="job">
                                                        <?php echo $q['cargo']; ?>
                                                    </p>
                                                </div>
                                                <div class="contact">
                                                    <i class="fa-solid fa-envelope "></i> &nbsp;<label>
                                                        <?php echo $q['correo']; ?>
                                                    </label>
                                                    <br>
                                                    <i class="fa-solid fa-phone "></i> &nbsp;<label>
                                                        <?php echo $q['celular']; ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-7">
                                                <p class="text">
                                                    "<?php echo $q['refran']; ?>"
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php } ?>
                    </div>
                </div>
                <?php foreach ($consult7 as $q) { ?>
                    <div class="col-sm-12 col-md-12 col-lg-6  my-4">
                        <div class="container">
                            <div class="row content">
                                <div class="col-3 imgp-1"
                                    style="background-image:url('../style/img-interfaz/img-colaboradores/<?php echo ($q['imagen']) ?>');">
                                </div>
                                <div class="col-9 content2">
                                    <div class="container content3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="title">
                                                    <h5 class="name">
                                                        <?php echo $q['nombre_colaborador']; ?>
                                                    </h5>
                                                    <p class="job">
                                                        <?php echo $q['cargo']; ?>
                                                    </p>
                                                </div>
                                                <div class="contact">
                                                    <i class="fa-solid fa-envelope "></i> &nbsp;<label>
                                                        <?php echo $q['correo']; ?>
                                                    </label>
                                                    <br>
                                                    <i class="fa-solid fa-phone "></i> &nbsp;<label>
                                                        <?php echo $q['celular']; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
    <script src="../js/scripts/fuction_equipo.js"></script>
</body>

</html>