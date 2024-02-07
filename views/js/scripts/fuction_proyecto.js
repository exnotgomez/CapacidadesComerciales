$(document).ready(function () {
    $(document).on('click', '.seemore', function () {
        var id_inmueble = $(this).attr('id');
        var dataString = 'id=' + id_inmueble;
        $('.seemore').hide();
        $('.loding').show();
        $.ajax({
            type: 'POST',
            url: '../consult/consultproyecto.php',
            data: dataString,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addproyectos').append(html);
            }
        });
    });
});
$(function () {
    $(document).on('click', '#recientes', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            reciente: buttonName,
        };
        console.log(datos);
        $.ajax({
            url: '../consult/consultproyecto.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarproyectos').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
$(document).ready(function () {
    $(document).on('click', '.seemore2', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            recienteSeemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addproyectos').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultproyecto.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addproyectos').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
$(function () {
    $(document).on('click', '#antiguos', function () {
        var buttonName = $(this).attr('name');
        var datos = {
            antiguos: buttonName,
        };
        console.log(datos);
        $.ajax({
            url: '../consult/consultproyecto.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarproyectos').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
$(document).ready(function () {
    $(document).on('click', '.seemore3', function () {
        var id_inmueble = $(this).attr('id');
        var reciente = $(this).attr('name');
        var datos = {
            antiguosSeemore: reciente,
            id: id_inmueble
        };
        $('.seemore').hide();
        $('#addproyectos').show();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: '../consult/consultproyecto.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addproyectos').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});