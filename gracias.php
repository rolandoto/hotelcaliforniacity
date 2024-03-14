<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila la información del formulario
    $start = $_POST["start"];
    $end = $_POST["end"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Correo de la empresa
    $correo_empresa = "administracion@hotelcaliforniamed.com";

    // Asunto del correo
    $asunto_empresa = "Nuevo formulario de reserva";

    // Mensaje para la empresa
    $mensaje_empresa = "Nuevo formulario de reserva recibido:\n\n";
    $mensaje_empresa .= "Fecha de ingreso: $start\n";
    $mensaje_empresa .= "Fecha de salida: $end\n";
    $mensaje_empresa .= "Adultos: $adults\n";
    $mensaje_empresa .= "Niños: $children\n";
    $mensaje_empresa .= "Correo electrónico: $email\n";
    $mensaje_empresa .= "Número de teléfono: $phone";

    // Cabeceras del correo
    $cabeceras_empresa = "From: $email";

    // Envía el correo a la empresa
    mail($correo_empresa, $asunto_empresa, $mensaje_empresa, $cabeceras_empresa);

    // Mensaje de respuesta para el usuario
    echo "Gracias por tu reserva. Nos pondremos en contacto contigo pronto.";
} else {
    // Si se intenta acceder al script de forma directa sin datos POST
    echo "Acceso no permitido.";
}
?>
