<?php 
$recipient = "yashkayasth74@gmail.com"; 
$subject = "Generic Mail"; 
$message = "Hello Geek! This is a generic email."; 
$headers = 'From: webmaster@example.com' . "\r\n" .
           'Reply-To: webmaster@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($recipient, $subject, $message, $headers)) {
    echo "Your Mail is sent successfully."; 
} else {
    echo "Your Mail is not sent. Try Again."; 
}


?>