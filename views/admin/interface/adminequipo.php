<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../style/css/dashboardpack.css">
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
                                <a href="#" class="mm-active">
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
                                        <a href="../interface/adminequipo.php" class="mm-active">
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
                                <a href="#">
                                    <i class="metismenu-icon  fa-solid fa-square-pen"></i>
                                    Blogs
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../add/addblog.php">
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
                                        <a href="../add/addproyecto.php ">
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
                                    <i class="fa-solid fa-users">
                                    </i>
                                </div>
                                <div>Equipo
                                    <div class="page-title-subheading">
                                        Vista del equipo de expreso digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 seccion1">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <button class="btn-settings" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Titulo principal
                                    </button>
                                    <button class="btn-settings" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Imagen principal
                                    </button>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form id="frm-titulo" class="was-validated" method="post"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label class="title form-label">Titulo principal</label>
                                                    <input type="text" class="content form-control"
                                                        placeholder="Titulo principal" name="titulo_principal"
                                                        id="titulo_principal" maxlength="60"  required>
                                                    <div class="form-text">Digite el titulo principal que desea mostrar
                                                        en el apartado de equipos.</div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn-enviar" name="btn-titulo"
                                                        id="btn-titulo">Enviar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form id="frm-img" class="was-validated" method="post"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label class="title form-label">Imagen principal</label>
                                                    <input type="file" class="content form-control" name="img_principal"
                                                        id="img_principal" required>
                                                    <div class="form-text">Ingrese la imagen que desea mostrar
                                                        en el apartado de equipos.</div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn-enviar" name="btn-img"
                                                        id="btn-img">Enviar</button>
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
        </div>
        <script src="../../js/dashboardpack.js"></script>
        <script src="../../js/bootstrap.bundle.min.js"></script>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/scripts/fuction_adminequipo.js"></script>
        <script src="../../js/sweetalert.js"></script>
</body>

</html>