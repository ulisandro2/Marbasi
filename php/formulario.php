<?php
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los valores del formulario
    $nombre = $_POST['fullname'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $empresa = $_POST['Empresa'];
    $mensaje = $_POST['message'];

    // Preparar el mensaje de correo electrónico
    $destinatario = "tuemail@example.com"; // Asegúrate de reemplazar esto con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto de tu sitio web";
    $contenido_del_correo = "Has recibido un nuevo mensaje de contacto.\n\n";
    $contenido_del_correo .= "Nombre: $nombre\n";
    $contenido_del_correo .= "Email: $email\n";
    $contenido_del_correo .= "Teléfono: $telefono\n";
    $contenido_del_correo .= "Empresa: $empresa\n";
    $contenido_del_correo .= "Mensaje:\n$mensaje";

    // Enviar el correo electrónico
    if(mail($destinatario, $asunto, $contenido_del_correo)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}


?>