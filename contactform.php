<?php
if (isset($_POST['submit'])) {
    $name = $_POST ['name'];
    $subject = $_POST ['subject'];
    $mailTo = $_POST ['email'];
    $message = $_POST ['message'];

    $mailTo = "HaritatheGamer@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}