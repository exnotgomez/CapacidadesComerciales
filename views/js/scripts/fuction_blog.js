// ____________________________________ Ver mas home _________________________________
$(document).ready(function () {
    $(document).on('click', '.seemore', function () {
        var id_inmueble = $(this).attr('id');
        var dataString = 'id=' + id_inmueble;
        $('.seemore').hide();
        $('.loding').show();
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: dataString,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            }
        });
    });
});
// ____________________________________ Etiquetas _________________________________
$(function () {
    $(document).on('click', '#etiqueta', function () {
        var buttonName = $(this).attr('name');
        var buttonClass = $(this).attr('class');
        var datos = {
            nombre: buttonName,
            clase: buttonClass
        };
        $.ajax({
            url: '../consult/consultblog.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarblogs').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Ver mas etiquetas _________________________________
$(document).ready(function () {
    $(document).on('click', '.seemore2', function () {
        var id_inmueble = $(this).attr('id');
        var buttonName = $(this).attr('name');
        var datos = {
            nombre: buttonName,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addblogs').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Recientes _________________________________
$(function () {
    $(document).on('click', '#recientes', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            reciente: buttonName,
        };
        console.log(datos);
        $.ajax({
            url: '../consult/consultblog.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarblogs').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Ver mas recientes _________________________________
 $(document).ready(function () {
    $(document).on('click', '.seemore3', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            recienteSeemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addblogs').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Antiguos _________________________________
$(function () {
    $(document).on('click', '#antiguos', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            antiguos: buttonName,
        };
        $.ajax({
            url: '../consult/consultblog.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarblogs').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Ver mas antiguos _________________________________
$(document).ready(function () {
    $(document).on('click', '.seemore4', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            antiguosSeemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addblogs').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Año 2023 _________________________________
$(function () {
    $(document).on('click', '#year2023', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            year2023: buttonName,
        };
        console.log(datos);
        $.ajax({
            url: '../consult/consultblog.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarblogs').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Ver mas año 2023 _________________________________
$(document).ready(function () {
    $(document).on('click', '.seemore5', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            year2023Seemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addblogs').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ año 2022 _________________________________
$(function () {
    $(document).on('click', '#year2022', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            year2022: buttonName,
        };
        console.log(datos);
        $.ajax({
            url: '../consult/consultblog.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarblogs').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
// ____________________________________ Ver mas año 2022 _________________________________
$(document).ready(function () {
    $(document).on('click', '.seemore6', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            year2022Seemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addblogs').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultblog.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addblogs').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});