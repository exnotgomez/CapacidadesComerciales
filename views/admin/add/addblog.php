<?php
include("../../admin/logic/db_expresodigital.php");
include("../../consult/consultmaestras.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../style/css/dashboardpack.css">
    <link rel="stylesheet" href="../../style/css/select2-bootstrap.min.css">
    <link rel="stylesheet" href="../../style/css/select2.min.css">
    <script src="../../js/fontawesome.js"></script>
    <title>Expreso Digital</title>
    <link rel="stylesheet" href="../../style/adminstyle.css">
</head>
<style>
    <?php include "../../style/adminstyle.css";
    ?>
</style>

<body>
    <div class="app-container app-theme-white body-tabs-shadow  fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <img src="../../style/img/img-index/logo-ExpresoDigital.png" height="38" width="130" alt="">
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="../interface/admin.html">
                                    <i class="metismenu-icon  fa-solid fa-table-list"></i>
                                    Tablero
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Interfaces de usuario</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-gear"></i>
                                    Ajustes
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../interface/adminindex.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-house"></i> Index
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../interface/adminblog.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-square-pen"></i> Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../interface/adminproyecto.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-lightbulb"></i> Proyectos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../interface/adminequipo.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-users"></i> Equipo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../interface/adminapp.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-rocket"></i> Aplicativos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-headset"></i> Contactanos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">HABITACIONES</li>
                            <li>
                                <a href="#" class="mm-active">
                                    <i class="metismenu-icon  fa-solid fa-square-pen"></i>
                                    Blogs
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addblog.php" class="mm-active">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seeblog.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver blogs
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-lightbulb"></i>
                                    Proyectos
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addproyecto.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear proyectos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seeproyectos.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver proyectos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-users"></i>
                                    Equipos
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addcolaborador.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear Colaborador
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seecolaborador.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver Colaboradores
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-rocket"></i>
                                    Apps
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addapp.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear apps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seeapp.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver apps
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">MAESTRAS</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-tag"></i>
                                    Etiquetas
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addetiqueta.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear etiquetas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seeetiqueta.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver etiquetas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-layer-group"></i>
                                    Areas
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addarea.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear areas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seearea.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver areas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-briefcase"></i>
                                    Cargos
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addcargo.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear cargos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seecargo.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver cargos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-network-wired"></i>
                                    Secciones
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addseccion.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-circle-plus"></i> Crear secciones
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../see/seeseccion.php">
                                            <i class="metismenu-icon"></i>
                                            <i class="fa-solid fa-eye"></i> Ver secciones
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa-solid fa-square-pen"></i>
                                </div>
                                <div>Crear Blogs
                                    <div class="page-title-subheading">
                                        Crear los blogs de expreso digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 seccion1">
                            <div class="card">
                                <div class="card-body" id="blog">
                                    <form id="frm-blog" class="row g-3 was-validated" method="post"
                                        enctype="multipart/form-data">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">Titulo principal</label>
                                            <input type="text" class="form-control" name="titulo-principal"
                                                id="titulo-principal"  required>
                                            <div class="form-text">Digite el titulo principal que desea tener su blog.
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label class="title form-label">Imagen principal</label>
                                            <input type="file" class="form-control" name="imagen_principal"
                                                id="imagen_principal" required>
                                            <div class="form-text">Seleccione la imagen principal que desea tener su
                                                blog.</div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label class="title form-label">Imagen secundaria</label>
                                            <input type="file" class="form-control" name="imagen_secundaria"
                                                id="imagen_secundaria">
                                            <div class="form-text">Seleccione la imagen secundaria que desea tener su
                                                blog.</div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <label class="title form-label">Tiempo de lectura</label>
                                            <input type="number" class="form-control" name="lectura" id="lectura" maxlength="3">
                                            <div class="form-text">Digite el tiempo en minutos.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-9">
                                            <label class="title form-label">Frase</label>
                                            <input type="text" class="form-control" name="frase" id="frase">
                                            <div class="form-text">Digite la frase que desea tener su
                                                blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">Descripcion</label>
                                            <textarea class="form-control" rows="3" name="descripcion" id="descripcion"
                                                required></textarea>
                                            <div class="form-text">Digite la descripcion que desea ver en el blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <br>
                                            <label class="form-label">Contenido</label>
                                            <textarea name="contenido" id="contenido"></textarea>
                                            <div class="form-text">Digite el contenido de su blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">URL de video</label>
                                            <input type="url" class="form-control" name="url" id="url">
                                            <div class="form-text">Digite la URL embebida de un video para su blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">Resumen</label>
                                            <textarea class="form-control" rows="3" name="resumen"
                                                id="resumen"></textarea>
                                            <div class="form-text">Digite el resumen del blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">Etiqueta principal</label>
                                            <select id="select1" name="etiqueta_Principal" style="width:100%;" required>
                                                <option value=""></option>
                                                <?php foreach ($consultEtiqueta as $q) { ?>
                                                    <option value="<?php echo $q['nombre']; ?>"><?php echo $q['nombre']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <div class="form-text">Elije la etiqueta principal del blog.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label class="title form-label">Etiquetas secundarias</label>
                                            <select id="select2" name="opciones[]" multiple="multiple"
                                                style="width:100%;" required>
                                                <?php foreach ($consultEtiqueta as $q) { ?>
                                                    <option value="<?php echo $q['nombre']; ?>"><?php echo $q['nombre']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <div class="form-text">Elije las estiquetas secundarias del blog.
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn-enviar" name="btn-blog"
                                                id="btn-blog">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script src="../../js/ckeditor.js"></script>
    <script src="../../js/dashboardpack.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/scripts/fuction_adminblog.js"></script>
    <script src="../../js/select2.full.min.js"></script>
    <script src="../../js/sweetalert.js"></script>

    <script>
        CKEDITOR.replace('contenido', {
            height: 100,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
        $('#select1').select2({
            theme: "bootstrap-5",
        });

        $('#select2').select2({
            theme: "bootstrap-5",
        });

    </script>
</body>

</html>