<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "itskumar@gmail.com";
    $headers = "From: ".$mailFrom;

    mail($mailTo, $subject, $message, $headers);
}
?>