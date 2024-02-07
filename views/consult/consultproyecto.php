<?php
include("../admin/logic/db_expresodigital.php");
$consult1 = mysqli_query($conexion, "SELECT * FROM interfaz_proyecto WHERE id_contenido=1");
$consult2 = mysqli_query($conexion, "SELECT * FROM interfaz_proyecto WHERE id_contenido=2");
$consult3 = mysqli_query($conexion, "SELECT * FROM interfaz_proyecto WHERE id_contenido=3");
$consult4 = mysqli_query($conexion, "SELECT * FROM interfaz_proyecto WHERE id_contenido=4");
$consult5 = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos ORDER BY id_proyecto DESC ");
$consult5_1 = mysqli_num_rows($consult5);
$consult6 = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos ORDER BY id_proyecto ASC");
$consult7 = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos ORDER BY id_proyecto DESC LIMIT 3 ");


if (isset($_POST['recienteSeemore']) && isset($_POST['id'])) {
    $recienteSeemore = $_POST["recienteSeemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM proyecto_proyectos WHERE id_proyecto < " . $lastid . " ORDER BY id_proyecto DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $showLimit = 3;
        $result = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos WHERE id_proyecto < " . $lastid . " ORDER BY id_proyecto DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_proyecto']; ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="last">
                        <div class="imagenes-wrapper">
                            <img class="img-b" src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                            <div class="title">
                                <h3>
                                    <?php echo $q['titulo_proyecto']; ?>
                                </h3>
                            </div>
                            <div class="more">
                                <button class="seemoreModal" type="submit" data-bs-toggle="modal"
                                    data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                                    más</button>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            <?php }
        }
        if ($totalRowCount > $showLimit) { ?>
            <div class="col-12 text-center">
                <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                    <button class="seemore2" type="submit" id="<?php echo $idComentario; ?>"
                        name="<?php echo $recienteSeemore; ?>">Ver más</button>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-12 text-center">
                <p> No hay más Proyectos...</p>
            </div>
        <?php }
    }
} else if (isset($_POST['antiguosSeemore']) && isset($_POST['id'])) {
    $antiguosSeemore = $_POST["antiguosSeemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $showLimit = 3;
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM proyecto_proyectos WHERE id_proyecto > " . $lastid . " ORDER BY id_proyecto ASC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $result = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos WHERE id_proyecto > " . $lastid . "   ORDER BY id_proyecto ASC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_proyecto']; ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="last">
                            <div class="imagenes-wrapper">
                                <img class="img-b" src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                                <div class="title">
                                    <h3>
                                    <?php echo $q['titulo_proyecto']; ?>
                                    </h3>
                                </div>
                                <div class="more">
                                    <button class="seemoreModal" type="submit" data-bs-toggle="modal"
                                        data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                                        más</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
            <?php }
        }
        if ($totalRowCount > $showLimit) { ?>
                <div class="col-12 text-center">
                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                        <button class="seemore3" type="submit" id="<?php echo $idComentario; ?>"
                            name="<?php echo $antiguosSeemore; ?>">Ver más</button>
                    </div>
                </div>
        <?php } else { ?>
                <div class="col-12 text-center">
                    <p> No hay más Proyectos...</p>
                </div>
        <?php }
    }
} else if (!empty($_REQUEST["id"])) {
    $lastid = $_REQUEST['id'];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM proyecto_proyectos WHERE id_proyecto < " . $lastid . " ORDER BY id_proyecto DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $result = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos WHERE id_proyecto < " . $lastid . "   ORDER BY id_proyecto DESC LIMIT $showLimit");
    $totalRegist = mysqli_num_rows($result);
    if ($totalRegist > 0) {
        foreach ($result as $q) {
            $idComentario = $q['id_proyecto']; ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="last">
                            <div class="imagenes-wrapper">
                                <img class="img-b" src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                                <div class="title">
                                    <h3>
                                <?php echo $q['titulo_proyecto']; ?>
                                    </h3>
                                </div>
                                <div class="more">
                                    <button class="seemoreModal" type="submit" data-bs-toggle="modal"
                                        data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                                        más</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
        <?php }
    }
    if ($totalRowCount > $showLimit) { ?>
                <div class="col-12 text-center">
                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                        <button class="seemore" type="submit" id="<?php echo $idComentario; ?>">Ver más</button>
                    </div>
                </div>
    <?php } else { ?>
                <div class="col-12 text-center">
                    <p> No hay más Proyectos...</p>
                </div>
    <?php }
}
?>
<?php
if (isset($_POST['reciente'])) {
    $nombre = $_POST["reciente"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM proyecto_proyectos  ORDER BY id_proyecto DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos  ORDER BY id_proyecto DESC LIMIT $showLimit ");
    foreach ($consult8 as $q) {
        $id_proyecto = $q['id_proyecto']; ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="last">
                <div class="imagenes-wrapper">
                    <img class="img-b" src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                    <div class="title">
                        <h3>
                            <?php echo $q['titulo_proyecto']; ?>
                        </h3>
                    </div>
                    <div class="more">
                        <button class="seemoreModal" type="submit" data-bs-toggle="modal"
                            data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                            más</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_proyecto; ?>">
                <button class="seemore2" type="submit" id="<?php echo $id_proyecto; ?>" name="<?php echo $nombre; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addproyectos">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
}
if (isset($_POST['antiguos'])) {
    $antiguos = $_POST["antiguos"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM proyecto_proyectos  ORDER BY id_proyecto ASC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM proyecto_proyectos  ORDER BY id_proyecto ASC LIMIT $showLimit ");
    foreach ($consult8 as $q) {
        $id_proyecto = $q['id_proyecto']; ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="last">
                <div class="imagenes-wrapper">
                    <img class="img-b" src="../style/img-interfaz/img-proyectos/<?php echo ($q['imagen_proyecto']) ?>">
                    <div class="title">
                        <h3>
                            <?php echo $q['titulo_proyecto']; ?>
                        </h3>
                    </div>
                    <div class="more">
                        <button class="seemoreModal" type="submit" data-bs-toggle="modal"
                            data-bs-target="#Modal<?php echo ($q['id_proyecto']) ?>">Ver
                            más</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_proyecto; ?>">
                <button class="seemore3" type="submit" id="<?php echo $id_proyecto; ?>" name="<?php echo $antiguos; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addproyectos">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
}