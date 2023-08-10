<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function send_email($email, $subject, $message)
{
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;   // Enable verbose debug output (change to 2 for detailed debugging)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Gmail SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'folushoayomide11@gmail.com';  // Your Gmail email address
        $mail->Password = 'Folusho10x';  // Your Gmail App Password (generated from account settings)
        $mail->SMTPSecure = 'tls';   // Enable TLS encryption
        $mail->Port = 587;   // TCP port to connect to (587 for TLS)

        //Recipients
        $mail->setFrom("no_reply@worshipmate.com");  // Sender email and name
        $mail->addAddress($email);  // Recipient email and name
        $mail->addReplyTo($email);  // Reply-to email and name

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        
        return array('success' => 1);
    } catch (Exception $e) {
        return array('success' => 0, 'error_message'  => $mail->ErrorInfo);
    }
}
