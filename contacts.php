<?php
require_once 'PHPMailer-FE_v4.11/src/PHPMailer.php';
//require_once 'PHPMailer-FE_v4.11/src/PHPMailer.php';
require 'PHPMailer-FE_v4.11/src/SMTP.php';
//require Necesario
//include Opcional
//include_once Necesario pero solo se importa una vez
//require_once Opcional pero solo de importa una vez

if(isset($_POST['mail'])){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 3;                                       // Enable verbose debug output
        //$mail->IsMail();                                            // Set mailer to use SMTP
        $mail->IsSMTP();
        $mail->Host       = 'mail.intrabytes.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        //$mail->SMTPSecure = true;
        $mail->Username   = 'info@tandilvial.com.ar';                     // SMTP username
        $mail->Password   = 'rg%bH1)=V;,X';                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('info@tandilvial.com.ar', $_POST['nombre']);
        $mail->addAddress('info@tandilvial.com.ar');
        //$mail->addAddress($_POST['mail'], $_POST['nombre']);
        //$mail->addReplyTo('info@example.com', 'Information');


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contacto';
        $mail->Body    = "
            Nombre: {$_POST['nombre']}<br>
            Correo: {$_POST['mail']}<br>
            Mensaje: {$_POST['msg']}
        ";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        var_dump($mail->send());
        var_dump($mail->ErrorInfo);
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

header("Location: html/contacto.html?send=true ");

//$_POST

 ?>
