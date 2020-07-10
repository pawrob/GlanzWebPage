<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'formularzKontaktowy@glanz.pl';
    $email_subject = "Glanz.pl formularz, pisze $name";
    $email_body = "Imie: $name\n".
                    // "Adres nadawcy: $visitor_email.\n".
                        "$name zadal(a) pytanie: \n\n $message.\n";

    $to = "pawel@glanz.pl";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>