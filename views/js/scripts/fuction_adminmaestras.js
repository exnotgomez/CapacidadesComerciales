// ___________________________________________add etiqueta_____________________________________
$(document).ready(function () {
    $('#btn-etiqueta').click(function () {
        var button = document.getElementById("btn-etiqueta");
        var buttonname = button.name;
        var datos = $('#frm-etiqueta').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('etiqueta').value = '';
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

// __________________________________________edit etiqueta________________________________________
$(document).ready(function () {
    $('form[id^="frm-edit-etiqueta"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Actualización exitosa", text: "Se han actualizado los datos con éxito.", icon: "success", button: false, timer: 2200
                    }).then(() => {
                        window.location.href = "../see/seeetiqueta.php";
                    });
                } else {
                    swal({ title: "Error en la actualización", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// _______________________________________delete etiqueta________________________________________
$(document).ready(function () {
    $('form[id^="frm-eliminar-etiqueta"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: " Etiqueta  eliminada con éxito", text: "La etiqueta ha sido eliminado correctamente y ya no está disponible en la plataforma.", icon: "success", button: false, timer: 3200
                    }).then(() => {
                        window.location.href = "../see/seeetiqueta.php";
                    })
                } else {
                    swal({ title: "Error al eliminar", text: "Por favor, revise cuidadosamente los datos e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// ___________________________________________add area_____________________________________
$(document).ready(function () {
    $('#btn-area').click(function () {
        var button = document.getElementById("btn-area");
        var buttonname = button.name;
        var datos = $('#frm-area').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('area').value = '';
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

// ___________________________________________edit area_____________________________________
$(document).ready(function () {
    $('form[id^="frm-edit-area"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Actualización exitosa", text: "Se han actualizado los datos con éxito.", icon: "success", button: false, timer: 2200
                    }).then(() => {
                        window.location.href = "../see/seearea.php";
                    });
                } else {
                    swal({ title: "Error en la actualización", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// _______________________________________delete area________________________________________
$(document).ready(function () {
    $('form[id^="frm-eliminar-area"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Area  eliminada con éxito", text: "El area ha sido eliminado correctamente y ya no está disponible en la plataforma.", icon: "success", button: false, timer: 3200
                    }).then(() => {
                        window.location.href = "../see/seearea.php";
                    })
                } else {
                    swal({ title: "Error al eliminar", text: "Por favor, revise cuidadosamente los datos e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// ___________________________________________add cargo_____________________________________
$(document).ready(function () {
    $('#btn-cargo').click(function () {
        var button = document.getElementById("btn-cargo");
        var buttonname = button.name;
        var datos = $('#frm-cargo').serialize();
        datos += '& ' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('cargo').value = '';
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

// ___________________________________________edit cargo_____________________________________
$(document).ready(function () {
    $('form[id^="frm-edit-cargo"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Actualización exitosa", text: "Se han actualizado los datos con éxito.", icon: "success", button: false, timer: 2200
                    }).then(() => {
                        window.location.href = "../see/seecargo.php";
                    });
                } else {
                    swal({ title: "Error en la actualización", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// _______________________________________delete cargo________________________________________
$(document).ready(function () {
    $('form[id^="frm-eliminar-cargo"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Cargo  eliminado con éxito", text: "El cargo ha sido eliminado correctamente y ya no está disponible en la plataforma.", icon: "success", button: false, timer: 3200
                    }).then(() => {
                        window.location.href = "../see/seecargo.php";
                    })
                } else {
                    swal({ title: "Error al eliminar", text: "Por favor, revise cuidadosamente los datos e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});
// ___________________________________________add seccion_____________________________________
$(document).ready(function () {
    $('#btn-seccion').click(function () {
        var button = document.getElementById("btn-seccion");
        var buttonname = button.name;
        var datos = $('#frm-seccion').serialize();
        datos += ' & ' + buttonname;
        console.log(datos);
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    document.getElementById('seccion').value = '';
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

// ___________________________________________edit seccion_____________________________________
$(document).ready(function () {
    $('form[id^="frm-edit-seccion"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Actualización exitosa", text: "Se han actualizado los datos con éxito.", icon: "success", button: false, timer: 2200
                    }).then(() => {
                        window.location.href = "../see/seeseccion.php";
                    });
                } else {
                    swal({ title: "Error en la actualización", text: "Por favor, revise cuidadosamente los datos que ha ingresado e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});

// _______________________________________delete seccion________________________________________
$(document).ready(function () {
    $('form[id^="frm-eliminar-seccion"]').submit(function (event) {
        event.preventDefault();
        var buttonname = $(this).find('button[type="submit"]').attr('name');
        var datos = $(this).serialize();
        datos += '&' + buttonname;
        $.ajax({
            type: "POST",
            url: "../logic/logmaestras.php",
            data: datos,
            success: function (r) {
                if (r == 1) {
                    swal({
                        title: "Seccion  eliminada con éxito", text: "La seccion ha sido eliminado correctamente y ya no está disponible en la plataforma.", icon: "success", button: false, timer: 3200
                    }).then(() => {
                        window.location.href = "../see/seeseccion.php";
                    })
                } else {
                    swal({ title: "Error al eliminar", text: "Por favor, revise cuidadosamente los datos e intente nuevamente.", icon: "error", button: false, timer: 2200 });
                }
            },
        });
        return false;
    });
});