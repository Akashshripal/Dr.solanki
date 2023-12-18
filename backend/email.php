<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['msg'];

    $date = date('Y-m-d');

    // Recipient
    $to = 'design@webuniversals.com';

    // Subject
    $subject = "$name";

    // Sender
    $fromName = 'Enquiry';
    $fromAddress = 'design@webuniversals.com';

    // Headers
    $headers = "From: $fromName <$fromAddress>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Return-Path: $fromAddress\r\n";
    $headers .= "Organization: Your Choice Websites\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Message
    $message = "Name: $name,\nEmail: $email,\nPhone Number: $phone,\nDoctor: $doctor,\nDate: $date,\nTime: $time,\nMessage: $msg";

    // Attempt to send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Redirect on success
        header('location:../thankyou.html');
    } else {
        // Log the error
        echo "Message could not be sent.";
    }
}
?>
