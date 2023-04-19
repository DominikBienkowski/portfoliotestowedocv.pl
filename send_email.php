<?php
if(isset($_POST['submit'])) {
    $to = "portfoliotestowedocv@portfolio"; // wprowadź właściwy adres email odbiorcy
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Wiadomość ze strony kontaktowej"; // wprowadź temat wiadomości

    $headers = "From: ".$name." <".$email.">"."\r\n".
    "Reply-To: ".$email."\r\n".
    "X-Mailer: PHP/".phpversion();

    mail($to, $subject, $message, $headers);
    echo "Wiadomość została wysłana. Dziękujemy za kontakt!";
}
?>