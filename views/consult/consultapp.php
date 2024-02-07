<?php
include("../admin/logic/db_expresodigital.php");
$consultContenido1 = mysqli_query($conexion, "SELECT * FROM interfaz_apps WHERE id_contenido=1");
$consultContenido2 = mysqli_query($conexion, "SELECT * FROM interfaz_apps WHERE id_contenido=2");
$consultContenido3 = mysqli_query($conexion, "SELECT * FROM interfaz_apps WHERE id_contenido=3");
$consultContenido4 = mysqli_query($conexion, "SELECT * FROM interfaz_apps WHERE id_contenido=4");
$consultApp1 = mysqli_query($conexion, "SELECT seccion_app, GROUP_CONCAT(nombre_app SEPARATOR '\n') AS nombre_app,url_app,imagen_app FROM apps_apps WHERE tipo_app = 'Principal' GROUP BY seccion_app;");
$consultAppRows = mysqli_query($conexion, "SELECT * FROM apps_apps WHERE tipo_app='Principal'");
$consultApp1_1 = mysqli_num_rows($consultAppRows);
$consultApp2 = mysqli_query($conexion, "SELECT seccion_app, GROUP_CONCAT(CONCAT(nombre_app, ' ', id_app ) ORDER BY id_app DESC SEPARATOR '\n') AS aplicaciones FROM apps_apps WHERE tipo_app = 'Principal' GROUP BY seccion_app ");
// _________________________________________________ Buscador _______________________________________________
if (isset($_POST['buscador']) != '' && isset($_POST['inputName'])) {
    $buscador = $_POST["buscador"];
    $inputName = $_POST["inputName"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM apps_apps WHERE seccion_app='$inputName' AND  nombre_app LIKE '%$buscador%' ORDER BY id_app DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 16;
    $consultApp3 = mysqli_query($conexion, "SELECT * FROM apps_apps WHERE seccion_app='$inputName' AND  nombre_app LIKE '%$buscador%' ORDER BY id_app DESC LIMIT  $showLimit "); ?>
    <div class="row">
        <?php
        foreach ($consultApp3 as $q) {
            $id_app = $q['id_app']; ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <a class='contenidoApps' href=' <?php echo $q['url_app']; ?>' target='_blank'>
                    <div class="boxApp2">
                        <label>
                            <?php echo $q['nombre_app']; ?>
                        </label>
                    </div>
                    <br>
                </a>
            </div>
        <?php } ?>
        <div class="col-12 text-center">
            <p class="resultados m-4">
                <?php echo $totalRowCount ?> Resultados
            </p>
        </div>
    </div>
    <?php
}
// _________________________________________________ Ver mas _______________________________________________
if (isset($_POST['nombre']) && isset($_POST['id'])) {
    $nombre = $_POST["nombre"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM apps_apps WHERE id_app < " . $lastid . " AND seccion_app='$nombre' ORDER BY id_app DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $showLimit = 16;
        $result = mysqli_query($conexion, "SELECT * FROM apps_apps WHERE id_app < " . $lastid . " AND seccion_app='$nombre'  ORDER BY id_app DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_app']; ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a class='contenidoApps' href=' <?php echo $q['url_app']; ?>' target='_blank'>
                        <div class="boxApp2">
                            <label>
                                <?php echo $q['nombre_app']; ?>
                            </label>
                        </div>
                        <br>
                    </a>
                </div>
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                <div class="col-12 text-end">
                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                        <button class="seemore2" type="submit" id="<?php echo $idComentario; ?>" name="<?php echo $nombre; ?>">Ver
                            más ⬇</button>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-12 text-center">
                    <p> No hay mas aplicativos...</p>
                </div>
            <?php }
        }
    }
}
// _________________________________________________ Filtro _______________________________________________
if (isset($_POST['clase'])) {
    $seccion = $_POST["seccion"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM apps_apps WHERE seccion_app='$seccion' ORDER BY id_app DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 16;
    $consultApp3 = mysqli_query($conexion, "SELECT * FROM apps_apps WHERE seccion_app='$seccion' ORDER BY id_app DESC LIMIT  $showLimit "); ?>
    <div class="col-12 text-end">
        <p class="resultados">
            <?php echo $totalRowCount ?> Resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <div class="col-sm-6 text-start">
        <p class="title">
            <?php echo $_POST["seccion"] ?>
        </p>
    </div>
    <div class="col-sm-6 text-end">
        <p>
            <input class="buscador" type="text" onkeyup="buscar(event)" id="miBuscador"
                name="<?php echo $_POST["seccion"] ?>" placeholder="Buscar por nombre...">
        </p>
    </div>
    <div class="container" id="resultBuscar">
        <div class="row">
            <?php
            foreach ($consultApp3 as $q) {
                $id_app = $q['id_app']; ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a class='contenidoApps' href=' <?php echo $q['url_app']; ?>' target='_blank'>
                        <div class="boxApp2">
                            <label>
                                <?php echo $q['nombre_app']; ?>
                            </label>
                        </div>
                        <br>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row" id="addapps">
        </div>
    </div>
    <?php
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-end">
            <div class="show_more_main" id="show_more_main<?php echo $id_app; ?>">
                <button class="seemore2" type="submit" id="<?php echo $id_app; ?>" name="<?php echo $seccion; ?>">Ver
                    más ⬇</button>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p class="noHayApps"> No hay mas aplicativos...</p>
        </div>
    <?php }
}