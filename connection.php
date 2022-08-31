<?php
    $name = $_POST['name'];
    $visitors_email = $_POST['email'];
    $messege = $_POST['messege'];

    $email_from = 'bhojakrpratik25@gmail.com';

    $email_subject = 'form submission';

    $email_body = "User name: $name.\n".
                    "User email: $visitors_email.\n".
                        "user message: $messege.\n ";

    $to = "bhojkarpratik96@gmail.com";

    $headers = "from : $email_from \r\n";

    $headers = "Reply-To : $visitors_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("location : index.html");



?>