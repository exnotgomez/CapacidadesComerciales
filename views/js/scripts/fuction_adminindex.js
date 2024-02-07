/* ___________________________________Titulo-pricipal__________________________________  */
$(document).ready(function () {
    $('#btn-titulo').click(function () {
        var button = document.getElementById("btn-titulo");
        var buttonname = button.name;
        var datos = $('#frm-titulo').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logindex.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('titulo_principal').value = '';
                    swal({
                        title: "Registro exitoso", text: "Se ha completado el registro con éxito.", icon: "success", button: false, timer: 2200
                    });
                } else {
                    swal({ title: "Error en el registro", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});
/* ___________________________________Subtitulo__________________________________  */
$(document).ready(function () {
    $('#btn-subtitulo').click(function () {
        var button = document.getElementById("btn-subtitulo");
        var buttonname = button.name;
        var datos = $('#frm-subtitulo').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logindex.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('subtitulo').value = '';
                    swal({
                        title: "Registro exitoso", text: "Se ha completado el registro con éxito.", icon: "success", button: false, timer: 2200
                    });
                } else {
                    swal({ title: "Error en el registro", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

/* ___________________________________imagen principal__________________________________  */
$(document).ready(function () {
    $('#btn-img-principal').click(function () {
        var button = document.getElementById("btn-img-principal");
        var buttonname = button.name;
        var frm = document.getElementById('frm-img-principal');
        var datos = new FormData(frm);
        datos.append('btn-img-principal', buttonname);
        $.ajax({
            method: "POST",
            url: "../logic/logindex.php",
            data: datos,
            cache: false,
            processData: false,
            contentType: false,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('img-principal').value = '';
                    swal({
                        title: "Registro exitoso", text: "Se ha completado el registro con éxito.", icon: "success", button: false, timer: 2200
                    });
                } else if (r == 2) {
                    swal({
                        title: "Formato invalido", text: "Por favor, asegúrese de que la imagen esté en uno de los siguientes formatos válidos: .gif .jpeg .jpg  .png", icon: "info",
                    });
                } else if (r == 3) {
                    swal({
                        title: "Tamaño no permitido", text: "Por favor, asegúrese de que la imagen no supere el tamaño máximo permitido de 2MB.", icon: "info",
                    });
                } else {
                    swal({ title: "Error en el registro", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

/* ___________________________________imagen secundaria__________________________________  */
$(document).ready(function () {
    $('#btn-img-secundaria').click(function () {
        var button = document.getElementById("btn-img-secundaria");
        var buttonname = button.name;
        var frm = document.getElementById('frm-img-secundaria');
        var datos = new FormData(frm);
        datos.append('btn-img-secundaria', buttonname);
        $.ajax({
            method: "POST",
            url: "../logic/logindex.php",
            data: datos,
            cache: false,
            processData: false,
            contentType: false,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('img-secundaria').value = '';
                    swal({
                        title: "Registro exitoso", text: "Se ha completado el registro con éxito.", icon: "success", button: false, timer: 2200
                    });
                } else if (r == 2) {
                    swal({
                        title: "Formato invalido", text: "Por favor, asegúrese de que la imagen esté en uno de los siguientes formatos válidos: .gif .jpeg .jpg  .png", icon: "info",
                    });
                } else if (r == 3) {
                    swal({
                        title: "Tamaño no permitido", text: "Por favor, asegúrese de que la imagen no supere el tamaño máximo permitido de 2MB.", icon: "info",
                    });
                } else {
                    swal({ title: "Error en el registro", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});