<?php
include("../admin/logic/db_expresodigital.php");
$consult1 = mysqli_query($conexion, "SELECT * FROM interfaz_blog WHERE id_contenido=1");
$consult2 = mysqli_query($conexion, "SELECT * FROM interfaz_blog WHERE id_contenido=2");
$consult3 = mysqli_query($conexion, "SELECT * FROM interfaz_blog WHERE id_contenido=3");
$consult4 = mysqli_query($conexion, "SELECT * FROM interfaz_blog WHERE id_contenido=4");
$consult5 = mysqli_query($conexion, "SELECT * FROM interfaz_blog WHERE id_contenido=5");
$consult6 = mysqli_query($conexion, "SELECT * FROM blog_blogs ORDER BY id_blog DESC LIMIT 3");
$consult7 = mysqli_query($conexion, "SELECT * FROM blog_blogs ORDER BY id_blog DESC ");
$consult7_1 = mysqli_num_rows($consult7);

// _________________________________________________________ Ver mas __________________________________________________
if (isset($_POST['nombre']) && isset($_POST['id'])) {
    $nombre = $_POST["nombre"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog < " . $lastid . " AND etiqueta1='$nombre' ORDER BY id_blog DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $showLimit = 3;
        $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog < " . $lastid . " AND etiqueta1='$nombre'  ORDER BY id_blog DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_blog']; ?>
                <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                    <div class="last">
                        <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                            <div class="imagenes-wrapper">
                                <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                <div class="col-12 text-center">
                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                        <button class="seemore2" type="submit" id="<?php echo $idComentario; ?>" name="<?php echo $nombre; ?>">Ver
                            más</button>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-12 text-center">
                    <p> No hay más Blogs...</p>
                </div>
            <?php }
        }
    }
} else if (isset($_POST['recienteSeemore']) && isset($_POST['id'])) {
    $recienteSeemore = $_POST["recienteSeemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog < " . $lastid . " ORDER BY id_blog DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $showLimit = 3;
        $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog < " . $lastid . " ORDER BY id_blog DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_blog']; ?>
                    <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                        <div class="last">
                            <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                <div class="imagenes-wrapper">
                                    <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                    <div class="col-12 text-center">
                        <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                            <button class="seemore3" type="submit" id="<?php echo $idComentario; ?>"
                                name="<?php echo $recienteSeemore; ?>">Ver
                                más</button>
                        </div>
                    </div>
            <?php } else { ?>
                    <div class="col-12 text-center">
                        <p> No hay más Blogs...</p>
                    </div>
            <?php }
        }
    }
} else if (isset($_POST['antiguosSeemore']) && isset($_POST['id'])) {
    $antiguosSeemore = $_POST["antiguosSeemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $showLimit = 3;
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog > " . $lastid . " ORDER BY id_blog ASC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog > " . $lastid . "   ORDER BY id_blog ASC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_blog']; ?>
                        <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                            <div class="last">
                                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                    <div class="imagenes-wrapper">
                                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                        <div class="col-12 text-center">
                            <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                                <button class="seemore4" type="submit" id="<?php echo $idComentario; ?>"
                                    name="<?php echo $antiguosSeemore; ?>">Ver
                                    más</button>
                            </div>
                        </div>
            <?php } else { ?>
                        <div class="col-12 text-center">
                            <p> No hay más Blogs...</p>
                        </div>
            <?php }
        }
    }
} else if (isset($_POST['year2023Seemore']) && isset($_POST['id'])) {
    $year2023Seemore = $_POST["year2023Seemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $showLimit = 3;
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog < " . $lastid . " AND  YEAR(fecha)=2023 ORDER BY id_blog DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog < " . $lastid . " AND  YEAR(fecha)=2023 ORDER BY id_blog DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_blog']; ?>
                            <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                                <div class="last">
                                    <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                        <div class="imagenes-wrapper">
                                            <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                            <div class="col-12 text-center">
                                <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                                    <button class="seemore5" type="submit" id="<?php echo $idComentario; ?>"
                                        name="<?php echo $year2023Seemore; ?>">Ver
                                        más</button>
                                </div>
                            </div>
            <?php } else { ?>
                            <div class="col-12 text-center">
                                <p> No hay más Blogs...</p>
                            </div>
            <?php }
        }
    }
} else if (isset($_POST['year2022Seemore']) && isset($_POST['id'])) {
    $year2022Seemore = $_POST["year2022Seemore"];
    if (!empty($_REQUEST["id"])) {
        $lastid = $_REQUEST['id'];
        $showLimit = 3;
        $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog < " . $lastid . " AND  YEAR(fecha)=2024 ORDER BY id_blog DESC");
        $array = mysqli_fetch_array($row);
        $totalRowCount = $array['num_rows'];
        $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog < " . $lastid . " AND  YEAR(fecha)=2024 ORDER BY id_blog DESC LIMIT $showLimit");
        $totalRegist = mysqli_num_rows($result);
        if ($totalRegist > 0) {
            foreach ($result as $q) {
                $idComentario = $q['id_blog']; ?>
                                <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                                    <div class="last">
                                        <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                            <div class="imagenes-wrapper">
                                                <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
            <?php }
            if ($totalRowCount > $showLimit) { ?>
                                <div class="col-12 text-center">
                                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                                        <button class="seemore6" type="submit" id="<?php echo $idComentario; ?>"
                                            name="<?php echo $year2022Seemore; ?>">Ver
                                            más</button>
                                    </div>
                                </div>
            <?php } else { ?>
                                <div class="col-12 text-center">
                                    <p> No hay más Blogs...</p>
                                </div>
            <?php }
        }
    }
} else if (!empty($_REQUEST["id"])) {
    $lastid = $_REQUEST['id'];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE id_blog < " . $lastid . " ORDER BY id_blog DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $result = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE id_blog < " . $lastid . "   ORDER BY id_blog DESC LIMIT $showLimit");
    $totalRegist = mysqli_num_rows($result);
    if ($totalRegist > 0) {
        foreach ($result as $q) {
            $idComentario = $q['id_blog']; ?>
                                <div class="col-sm-12 col-md-12 col-lg-4" id="<?php echo $q['id_blog']; ?>">
                                    <div class="last">
                                        <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                                            <div class="imagenes-wrapper">
                                                <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
        <?php }
        if ($totalRowCount > $showLimit) { ?>
                                <div class="col-12 text-center">
                                    <div class="show_more_main" id="show_more_main<?php echo $idComentario; ?>">
                                        <button class="seemore" type="submit" id="<?php echo $idComentario; ?>">Ver más</button>
                                    </div>
                                </div>
        <?php } else { ?>
                                <div class="col-12 text-center">
                                    <p> No hay más Blogs...</p>
                                </div>
        <?php }
    }
}
?>
<!-- ______________________________________________ Etiquetas _______________________________________________ -->
<?php
if (isset($_POST['clase'])) {
    $nombre = $_POST["nombre"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs WHERE etiqueta1='$nombre' ORDER BY id_blog DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE etiqueta1='$nombre' ORDER BY id_blog DESC  LIMIT $showLimit ");
    ?>
    <div class="col-12 text-end">
        <br>
        <p class="result">
            <?php echo $totalRowCount ?> resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <?php
    foreach ($consult8 as $q) {
        $id_blog = $q['id_blog']; ?>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="last">
                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                    <div class="imagenes-wrapper">
                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                <button class="seemore2" type="submit" id="<?php echo $id_blog; ?>" name="<?php echo $nombre; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addblogs">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
} ?>
<!-- ______________________________________________ Reciente y antiguo _______________________________________________ -->
<?php
if (isset($_POST['reciente'])) {
    $nombre = $_POST["reciente"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs  ORDER BY id_blog DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM blog_blogs  ORDER BY id_blog DESC LIMIT $showLimit ");
    ?>
    <div class="col-12 text-end">
        <br>
        <p class="result">
            <?php echo $totalRowCount ?> resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <?php
    foreach ($consult8 as $q) {
        $id_blog = $q['id_blog']; ?>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="last">
                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                    <div class="imagenes-wrapper">
                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                <button class="seemore3" type="submit" id="<?php echo $id_blog; ?>" name="<?php echo $nombre; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addblogs">
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
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs  ORDER BY id_blog ASC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM blog_blogs ORDER BY id_blog ASC LIMIT $showLimit ");
    ?>
    <div class="col-12 text-end">
        <br>
        <p class="result">
            <?php echo $totalRowCount ?> resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <?php
    foreach ($consult8 as $q) {
        $id_blog = $q['id_blog']; ?>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="last">
                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                    <div class="imagenes-wrapper">
                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                <button class="seemore4" type="submit" id="<?php echo $id_blog; ?>" name="<?php echo $antiguos; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addblogs">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
} ?>
<!-- ______________________________________________ Años _______________________________________________ -->
<?php
if (isset($_POST['year2023'])) {
    $year2023 = $_POST["year2023"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs  WHERE YEAR(fecha)=2023 ORDER BY id_blog DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE YEAR(fecha)=2023 ORDER BY id_blog DESC LIMIT $showLimit");
    ?>
    <div class="col-12 text-end">
        <br>
        <p class="result">
            <?php echo $totalRowCount ?> resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <?php
    foreach ($consult8 as $q) {
        $id_blog = $q['id_blog']; ?>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="last">
                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                    <div class="imagenes-wrapper">
                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                <button class="seemore5" type="submit" id="<?php echo $id_blog; ?>" name="<?php echo $year2023; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addblogs">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
} ?>
<?php
if (isset($_POST['year2022'])) {
    $year2022 = $_POST["year2022"];
    $row = mysqli_query($conexion, "SELECT COUNT(*) as num_rows FROM blog_blogs  WHERE YEAR(fecha)=2024 ORDER BY id_blog DESC");
    $array = mysqli_fetch_array($row);
    $totalRowCount = $array['num_rows'];
    $showLimit = 3;
    $consult8 = mysqli_query($conexion, "SELECT * FROM blog_blogs WHERE YEAR(fecha)=2024 ORDER BY id_blog DESC LIMIT $showLimit");
    ?>
    <div class="col-12 text-end">
        <br>
        <p class="result">
            <?php echo $totalRowCount ?> resultados
        </p>
    </div>
    <img class="linea-menus" src="../style/img/img-index/linea-menus.png" alt="">
    <?php
    foreach ($consult8 as $q) {
        $id_blog = $q['id_blog']; ?>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="last">
                <a href="../vistas/viewblog.php?blog=<?php echo $q['id_blog'] ?>">
                    <div class="imagenes-wrapper">
                        <img class="img-b" src="../style/img-interfaz/img-blogs/<?php echo ($q['imagen_blog']) ?>">
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
    <?php }
    if ($totalRowCount > $showLimit) { ?>
        <div class="col-12 text-center">
            <div class="show_more_main" id="show_more_main<?php echo $id_blog; ?>">
                <button class="seemore6" type="submit" id="<?php echo $id_blog; ?>" name="<?php echo $year2022; ?>">Ver
                    más</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="addblogs">
            </div>
        </div>
    <?php } else {
        ?>
        <div class="col-12 text-center">
            <p> No hay más Blogs...</p>
        </div>
    <?php }
} ?>