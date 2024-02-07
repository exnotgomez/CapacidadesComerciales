<?php
include("../logic/db_expresodigital.php");
include("../../consult/consultmaestras.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/css/dataTables.min.css">
    <link rel="stylesheet" href="../../style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../style/css/dashboardpack.css">
    <script src="../../js/fontawesome.js"></script>
    <title>Expreso Digital</title>
    <!-- <link rel="stylesheet" href="../../style/adminstyle.css"> -->
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
                                        <a href="">
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
                                <a href="#" class="mm-active">
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
                                        <a href="../see/seecolaborador.php" class="mm-active">
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
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div>Ver Colaboradores
                                    <div class="page-title-subheading">
                                        Visualizar los colaboradores de expreso digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 seccion1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table1" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Acciones</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">area</th>
                                                    <th scope="col">cargo</th>
                                                    <th scope="col">correo</th>
                                                    <th scope="col">Refran</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $consulta1 = "SELECT * FROM equipo_colaboradores ORDER BY id_equipo  DESC";
                                            $consult1 = mysqli_query($conexion, $consulta1);
                                            $i = 0;
                                            foreach ($consult1 as $p) {
                                                echo
                                                    '<tr>
                                                <td class="text-center"><button class="edit" type="submit" data-bs-toggle="modal"
                                                data-bs-target="#Modal' . ($p['id_equipo']) . '"><i class="fa-solid fa-pen-to-square fa-lg"></i></button> <label><form id="frm-eliminar" method="post">
                                                <input type="hidden" class="form-control" name="id" id="id" value="' . $p['id_equipo'] . '"><button class="edit" type="submit" name="eliminar-colaborador" id="eliminar-colaborador' . ($i) . '"><i class="fa-solid fa-trash"></i></button></form></label></td>
                                                <td>' . $p['id_equipo'] . '</td>
                                                <td>' . $p['nombre_colaborador'] . '</td>  
                                                <td> <img src="../../style/img-interfaz/img-colaboradores/' . $p['imagen'] . '" height="60px" width="100px" ></td>
                                                <td>' . $p['area'] . '</td>          
                                                <td>' . $p['cargo'] . '</td>
                                                <td>' . $p['correo'] . '</td>          
                                                <td>' . substr($p['refran'], 0, 60) . '...</td>    
                                                '; ?>
                                                </tr>
                                                <?php $i++;
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $i = 0;
    foreach ($consult1 as $p) { ?>
        <div class="modal fade" id="Modal<?php echo ($p['id_equipo']) ?>" tabindex="-1" aria-labelledby="Modal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5"><i class="fa-solid fa-users"></i>
                            Colaborador
                            <?php echo $p['nombre_colaborador']; ?>
                        </h1>
                        <button type="button" class="closeicon" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-regular fa-circle-xmark fa-2xl"></i></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-edit" class="row g-3 was-validated" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $p['id_equipo']; ?>">
                            <div class="col-12">
                                <label class="title form-label">Nombre</label>
                                <input type="hidden" class="form-control" name="id" required
                                    value="<?php echo $p['id_equipo']; ?>">
                                <input type="text" class="form-control" name="nombre" id="nombre" required
                                    value="<?php echo $p['nombre_colaborador']; ?>">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <label class="title form-label">Correo del colaborador</label>
                                <input type="email" class="form-control" name="correo" id="correo" required
                                    value="<?php echo $p['correo']; ?>">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <label class="title form-label">Numero del colaborador</label>
                                <input type="number" class="form-control" name="numero" id="numero"
                                    value="<?php echo $p['celular']; ?>">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label class="title form-label">Foto del colaborador</label>
                                <input type="hidden" class="form-control" name="img" required
                                    value="<?php echo $p['imagen']; ?>">
                                <input type="file" class="form-control" name="imagen" id="imagen">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <label class="form-label">Area del colaborador</label>
                                <select class="form-control" name="area" id="area" required>
                                    <option value="<?php echo $p['area']; ?>" selected><?php echo $p['area']; ?></option>
                                    <?php foreach ($consultArea as $q) { ?>
                                        <option value="<?php echo $q['nombre']; ?>"><?php echo $q['nombre']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <label class="form-label">Cargo del colaborador</label>
                                <select class="form-control" name="cargo" id="cargo" required>
                                    <option value="<?php echo $p['cargo']; ?>" selected><?php echo $p['cargo']; ?></option>
                                    <?php foreach ($consultCargo as $q) { ?>
                                        <option value="<?php echo $q['nombre']; ?>"><?php echo $q['nombre']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label class="form-label">Refran del colaborador</label>
                                <textarea class="form-control" rows="3" placeholder="Digite la descripcion" name="refran"
                                    id="refran" maxlength="160"><?php echo $p['refran']; ?></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-enviar" name="btn-edit"
                                    id="btn-edit<?php echo $i ?>">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++;
    } ?>
    <script src="../../js/dashboardpack.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/scripts/fuction_adminequipo.js"></script>
    <script src="../../js/sweetalert.js"></script>
    <script src="../../js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table1').DataTable({
                "order": [[1, "desc"]],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ ", "info": "Pagina _PAGE_ de _PAGES_", "infoEmpty": "No hay registros disponibles", "infoFiltered": "(filtrada de _MAX_ registros)", "loadingRecords": "Cargando...", "processing": "Procesando...", "search": "Buscar:", "zeroRecords": "No se encontraron registros coincidentes", "paginate": {
                        "next": "<i class= 'fa-solid fa-arrow-right' ></i> ", "previous": "<i class= 'fa-solid fa-arrow-left ' ></i> "
                    },
                }
            });
        });
    </script>
</body>

</html>