<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'info@mywebsite.com';
    $email_subject = 'New Form Submission';
    $email_body = 'User Name: ' . $name . '\n' . 'User Email: ' . $visitor_email . '\n' .
        'Subject: ' .$subject . '\n' . 'Message: ' . $message . '\n';
    $email_to = 'dai.codeunited@gmail.com';

    $headers = 'From: ' . $email_from . '\r\n';
    $headers .= 'Reply-To: ' . $visitor_email . '\r\n';

    mail($email_to, $email_subject, $email_body, $headers);
    header('Location: contact.html');
}