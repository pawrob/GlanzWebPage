<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'pawrob@icloud.com';
    $email_subject = "Mail - PiotrDetal.pl";
    $email_body = "User name: $name.\n".
                    "User email: $visitor_email.\n".
                        "User message: $message.\n";

    $to = "mrpawrob@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>