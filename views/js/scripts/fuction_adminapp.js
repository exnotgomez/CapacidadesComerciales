/* ___________________________________Titulo pricipal__________________________________  */
$(document).ready(function () {
    $('#btn-titulo').click(function () {
        var button = document.getElementById("btn-titulo");
        var buttonname = button.name;
        var datos = $('#frm-titulo').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logapp.php",
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

/* ___________________________________imagen principal__________________________________  */
$(document).ready(function () {
    $('#btn-img-principal').click(function () {
        var button = document.getElementById("btn-img-principal");
        var buttonname = button.name;
        var frm = document.getElementById('frm-img');
        var datos = new FormData(frm);
        datos.append('btn-img-principal', buttonname);
        $.ajax({
            method: "POST",
            url: "../logic/logapp.php",
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
/* ___________________________________Subtitulo pricipal__________________________________  */
$(document).ready(function () {
    $('#btn-subtitulo').click(function () {
        var button = document.getElementById("btn-subtitulo");
        var buttonname = button.name;
        var datos = $('#frm-subtitulo').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logapp.php",
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
/* ___________________________________Descripcion pricipal__________________________________  */
$(document).ready(function () {
    $('#btn-descripcion').click(function () {
        var button = document.getElementById("btn-descripcion");
        var buttonname = button.name;
        var datos = $('#frm-descripcion').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logapp.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('descripcion').value = '';
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
/* ___________________________________add aplicacion__________________________________  */
$(document).ready(function () {
    $('#btn-app').click(function () {
        var button = document.getElementById("btn-app");
        var buttonname = button.name;
        var frm = document.getElementById('frm-app');
        var datos = new FormData(frm);
        datos.append('btn-app', buttonname);
        console.log(datos);
        $.ajax({
            method: "POST",
            url: "../logic/logapp.php",
            data: datos,
            cache: false,
            processData: false,
            contentType: false,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('nombre').value = '';
                    document.getElementById('tipo').value = '';
                    document.getElementById('seccion').value = '';
                    document.getElementById('tipo').value = '';
                    document.getElementById('url').value = '';
                    document.getElementById('imagen').value = '';
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
/* ___________________________________edit proyecto__________________________________  */
$(document).ready(function () {
    $('form[id^="frm-edit"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var frm = this;
        var datos = new FormData(frm);
        datos.append('btn-edit', buttonname);
        $.ajax({
            method: "POST",
            url: "../logic/logapp.php",
            data: datos,
            cache: false,
            processData: false,
            contentType: false,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Actualización exitosa", text: "Se han actualizado los datos con éxito.", icon: "success", button: false, timer: 2200
                    }).then(() => {
                        window.location.href = "../see/seeapp.php";
                    })
                } else if (r == 2) {
                    swal({
                        title: "Formato invalido", text: "Por favor, asegúrese de que la imagen esté en uno de los siguientes formatos válidos: .gif .jpeg .jpg  .png", icon: "info",
                    });
                } else if (r == 3) {
                    swal({
                        title: "Tamaño no permitido", text: "Por favor, asegúrese de que la imagen no supere el tamaño máximo permitido de 2MB.", icon: "info",
                    });
                } else {
                    swal({ title: "Error en la actualización", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});
/* ___________________________________delete aplicacion__________________________________  */
$(document).ready(function () {
    $('form[id^="frm-eliminar"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logapp.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: " Aplicacion eliminado con éxito", text: "La aplicacion ha sido eliminado correctamente y ya no está disponible en la plataforma.", icon: "success", button: false, timer: 3200
                    }).then(() => {
                        window.location.href = "../see/seeapp.php";
                    })
                } else {
                    swal({ title: "Error al eliminar", text: "Por favor, revise cuidadosamente los datos e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});