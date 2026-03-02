<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

ini_set("display_errors", 0);
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./PHPMailer/PHPMailer.php";
    require "./PHPMailer/SMTP.php";
    require "./PHPMailer/Exception.php";

    // --- VALIDACIÓN ---
    if (
        empty($_POST["nombre"]) ||
        empty($_POST["correo"]) ||
        empty($_POST["telefono"]) ||
        empty($_POST["mensaje"])
    ) {
        http_response_code(400);
        echo "Por favor completa todos los campos obligatorios.";
        exit();
    }

    // --- SANITIZACIÓN ---
    $nombre = strip_tags(trim($_POST["nombre"]));
    $empresa = strip_tags(trim($_POST["empresa"] ?? ""));
    $cargo = strip_tags(trim($_POST["cargo"] ?? ""));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $pais = strip_tags(trim($_POST["pais"] ?? ""));
    $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Por favor introduce un correo electrónico válido.";
        exit();
    }

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    try {
        // --- SMTP CONFIG ---
        $mail->isSMTP();
        $mail->Host = "petropac.com.mx";
        $mail->SMTPAuth = true;
        $mail->Username = "noreplythermopac@petropac.com.mx";
        $mail->Password = '$m^S#{2@rMj8';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->Timeout = 30;
        $mail->SMTPKeepAlive = false;

        $mail->SMTPOptions = [
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true,
            ],
        ];

        // --- DESTINATARIOS ---
        $mail->setFrom("noreplythermopac@petropac.com.mx", "JGS Sitio");
        $mail->addAddress("ventas@thermopac.com", "JGS Contacto");
        $mail->addReplyTo($correo, $nombre);

        // --- CONTENIDO ---
        $mail->isHTML(true);
        $mail->Subject =
            "Nueva solicitud de cotización desde el sitio web de JGS";

        $mail->Body =
            "
            <h2>Nueva solicitud de contacto</h2>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Empresa:</strong> {$empresa}</p>
            <p><strong>Cargo:</strong> {$cargo}</p>
            <p><strong>Correo:</strong> {$correo}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>País:</strong> {$pais}</p>
            <hr>
            <p><strong>Mensaje:</strong></p>
            <p>" .
            nl2br($mensaje) .
            "</p>
        ";

        $mail->AltBody = "
            Nueva solicitud de contacto

            Nombre: {$nombre}
            Empresa: {$empresa}
            Cargo: {$cargo}
            Correo: {$correo}
            Teléfono: {$telefono}
            País: {$pais}

            Mensaje:
            {$mensaje}
        ";

        $mail->send();

        http_response_code(200);
        echo "Gracias. Tu solicitud fue enviada correctamente.";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Lo sentimos, ocurrió un error al enviar el mensaje. Intenta nuevamente más tarde.";
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
    }
} else {
    http_response_code(403);
    echo "Acceso no permitido.";
}
