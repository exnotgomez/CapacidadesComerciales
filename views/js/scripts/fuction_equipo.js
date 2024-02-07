$(function () {
    $(document).on('click', '.areas', function () {
        var buttonName = $(this).attr('name');
        var buttonClass = $(this).attr('class');
        datos = buttonName
        var datos = {
            nombre: buttonName,
            clase: buttonClass
        };
        $.ajax({
            url: '../consult/consultequipo.php',
            method: 'POST',
            data: datos,
            success: function (html) {
                $('#listarcolaboradores').html(html);
            },
            error: function () {
                alert('Error al obtener los productos');
            }
        });
    });
});