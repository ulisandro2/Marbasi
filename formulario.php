<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company'])) : '';
    $message = isset($_POST['text']) ? htmlspecialchars(trim($_POST['text'])) : '';

    $to = "sanchezulises952@gmail.com";  // Reemplaza con tu correo electrónico
    $subject = "Mensaje de web Marba";
    
    $body = "Nombre Completo: $name\n";
    $body .= "Email: $email\n";
    $body .= "Número Telefónico: $phone\n";
    $body .= "Empresa: $company\n";
    $body .= "Mensaje:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        http_response_code(500);
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>