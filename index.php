<?php



     $to = 'shippudennaruto699@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: elhenachi1@gmail.com' . "\r\n" .
     'Reply-To: elhenachi1@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
?>