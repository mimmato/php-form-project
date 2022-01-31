<?php
//recipient
$to = 'mihail-mihaylov@outlook.com';

//Subject
$subject = 'Test email';

//message
$message = '<h1>Testing PHP mail form</h1>';

//header
$headers = "From: The sender name <sender@domain.com>\r\n";
$headers .= "Reply-To: reply-to@domain.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
mail($to,  $subject, $message, $headers);
