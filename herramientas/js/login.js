$(document).ready(function () {
    
    $("#entrarBtn").click(function () {
        if ($("#login-document-type").val() == "") {
            Swal.fire({
                title: "Informe de Credenciales",
                text: "Seleccione el tipo de documento."
            });
            $("#login-document-type").focus();
        } else {
            if ($("#login-num-document").val() == "") {
            Swal.fire({
                title: "Informe de Credenciales",
                text: "Digite el número de documento."
            });
            $("#login-num-document").focus();
            } else {
                if ($("#login-password").val() == "") {
                Swal.fire({
                    title: "Informe de Credenciales",
                    text: "Digite la contraseña."
                });
                $("#login-password").focus();
                } else {
                    $.ajax({
                        url: "herramientas/controlador/loginControl.php", 
                        type: "POST",
                        data: {
                            opcion: "iniciarLogueo",
                            tipoDocUsu: $("#login-document-type").val(),
                            documentoUsu: $("#login-num-document").val(),
                            claveUsu: $("#login-password").val()
                        },
                        success: function (response) {
                            var estado = String(response).trim();
                            if (estado === "0") {
                                Swal.fire({
                                    title: "Informe de Credenciales",
                                    text: "Acceso No Permitido."
                                });
                            }
                            if (estado === "1") {
                                Swal.fire({
                                    title: "Informe de Credenciales",
                                    text: "Acceso permitido."
                                });
                                // Redirección adaptada a tu estructura PHP en vistas/dashboards/
                                window.location.href = "herramientas/vistas/dashboards/learner-dashboard.php"; 
                            }
                        },
                        error: function (xhr) {
                            alert("Error " + xhr.status + ": " + xhr.responseText);
                        }
                    });
                }
            }
        }
    });

    $("#activarBtn").click(function () {
        if ($("#recovery-email").val() == "") {
            Swal.fire({
                title: "Informe de Credenciales",
                text: "Para recuperar la clave por favor digite su correo electrónico institucional."
            });
            $("#recovery-email").focus();
        } else {
            // Lógica de recuperación
        }
    });

});