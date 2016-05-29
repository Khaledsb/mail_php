<?php

     $to      = 'shipudennaruto699@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: shipudennaruto699@gmail.com' . "\r\n" .
     'Reply-To: sebti.khaled1@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
     echo "ok";
?>
