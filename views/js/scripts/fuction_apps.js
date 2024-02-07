//________________________________ Filtrar secciones __________________________
$(function () {
    $(document).on('click', '#seccion', function () {
        var buttonName = $(this).attr('name');
        var buttonClass = $(this).attr('class');
        var datos = {
            seccion: buttonName,
            clase: buttonClass
        };
        $.ajax({
            url: '../consult/consultapp.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listasapps').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
//________________________________ Ver mas  __________________________
$(document).ready(function () {
    $(document).on('click', '.seemore2', function () {
        var id_inmueble = $(this).attr('id');
        var buttonName = $(this).attr('name');
        var datos = {
            nombre: buttonName,
            id: id_inmueble
        };
        $('.seemore2').hide();
        $.ajax({
            type: 'POST',
            url: '../consult/consultapp.php',
            data: datos,
            success: function (html) {
                $('#show_more_main' + id_inmueble).remove();
                $('#addapps').append(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});
//________________________________ Buscador  __________________________
function buscar(event) {
    $(document).ready(function () {
        var buscador = $('#miBuscador').val();
        var inputName = $('#miBuscador').attr('name');
        var datos = {
            buscador: buscador,
            inputName: inputName
        };
        $.ajax({
            url: '../consult/consultapp.php',
            method: 'POST',
            data: datos,
            success: function (data) {
                $('.resultados').hide();
                $('.noHayApps').hide();
                $('.seemore2').hide();
                $('#resultBuscar').html(data);
            }
        });
    })
};