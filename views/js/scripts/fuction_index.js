/* ___________________________________Titulo-pricipal__________________________________  */
// function btn_titulo() {
//     document.getElementById('btn-titulo').addEventListener('click', (e) => {
//         e.preventDefault();
//         let form = document.getElementById('form-titulo');
//         let formdata = new FormData(form);
//         $.ajax({
//             method: 'post', url: "../admin/logindex.php", data: formdata + '&btn-titulo', cache: false, processData: false, contentType: false,
//             success: (e) => {
//                 if (e == "enviado") {
//                     swal({
//                         title: "Registro exitoso", text: "El registro se a realizado exitosamente", icon: "success", button: false, timer: 2200
//                     }).then(() => { window.location.href = "../admin/adminindex.php"; });
//                 }
//             },
//             error: (e) => {
//                 if (e == "error") {
//                     swal({ title: "Error en el registro", text: "El registro no se a realizado", icon: "info", button: false, timer: 2200 })
//                 }
//             },

//         })
//     })
// }

/* ___________________________________subtitulo__________________________________  */
// document.getElementById('btn-subtitulo').addEventListener('click', (e) => {
//     e.preventDefault();
//     let form = document.getElementById('form-subtitulo');
//     let formdata = new FormData(form);
//     $.ajax({
//         method: 'post', url: "../admin/logindex.php", data: formdata, cache: false, processData: false, contentType: false,
//         success: (e) => {
//             if (e == "enviado") {
//                 swal({
//                     title: "Registro exitoso", text: "El registro se a realizado exitosamente", icon: "success", button: false, timer: 2200
//                 }).then(() => { window.location.href = "../admin/adminindex.php"; });
//             }
//         },
//         error: (e) => {
//             if (e == "error") {
//                 swal({ title: "Error en el registro", text: "El registro no se a realizado", icon: "info", button: false, timer: 2200 })
//             }
//         },

//     })
// })