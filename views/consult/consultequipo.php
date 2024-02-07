<?php
include("../../views/admin/logic/db_expresodigital.php");

$consult1 = mysqli_query($conexion, "SELECT * FROM interfaz_equipo WHERE id_contenido=1");
$consult2 = mysqli_query($conexion, "SELECT * FROM interfaz_equipo WHERE id_contenido=2");
$consult5 = mysqli_query($conexion, "SELECT * FROM equipo_colaboradores WHERE cargo='Directora' or cargo='Director'");
$consult6 = mysqli_query($conexion, "SELECT * FROM equipo_colaboradores WHERE area='Experiencia' and cargo LIKE '%lider%'");
$consult7 = mysqli_query($conexion, "SELECT * FROM equipo_colaboradores WHERE area='Experiencia' and cargo NOT LIKE '%lider%'");

if (isset($_POST['clase'])) {
    $nombre = $_POST["nombre"];
    $consult8 = mysqli_query($conexion, "SELECT * FROM equipo_colaboradores WHERE area='$nombre' AND cargo LIKE '%lider%' AND cargo NOT LIKE '%Directora%'");
    $consult9 = mysqli_query($conexion, "SELECT * FROM equipo_colaboradores WHERE area='$nombre' AND cargo NOT LIKE '%lider%' AND cargo NOT LIKE '%Directora%'");
    ?>
    <div class="col-12 my-4">
        <div class="container">
            <?php foreach ($consult8 as $q) { ?>
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
                                    <p class="text">"
                                        <?php echo $q['refran']; ?>"
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
    <?php foreach ($consult9 as $q) { ?>
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
<?php }
?>