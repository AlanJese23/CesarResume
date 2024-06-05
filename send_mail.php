<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Dirección de correo destino (la tuya)
    $to = "dezimo_94@hotmail.com";
    
    // Asunto del correo
    $email_subject = "Nuevo mensaje de contacto: $subject";
    
    // Cuerpo del correo
    $email_body = "Has recibido un nuevo mensaje de contacto.\n\n".
                  "Nombre: $name\n".
                  "Correo: $email\n".
                  "Asunto: $subject\n".
                  "Mensaje:\n$message";

    // Encabezados del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el correo
    mail($to, $email_subject, $email_body, $headers);

    // Redirige a una página de agradecimiento (opcional)
    header('Location: thank_you.html');
    exit();
}
?>
