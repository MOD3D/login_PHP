$(document).ready(function() {
    $("#enviar_Datos").on('submit', function(event) {
        event.preventDefault();
        var usuario = $("#usuario").val();
        var contraseña = $("#contraseña").val();
        $.get("autentUser.php", { usuario: usuario, contraseña: contraseña }, function(datos) {
            $("#impriResult").html(datos);
            $('#editModal').modal('show');
        });
    });

    $("#regresar").on('click', function() {
        window.location.href = 'index.php'; // Redirigir al index.php
    });
});