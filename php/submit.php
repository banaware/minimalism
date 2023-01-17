<?php
if(isset($_POST['submit'])) {
    $to = "kristijanangjelkoski@gmail.com"; // enter your email address
    $subject = "Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail($to, $subject, $txt, $headers);
    header("Location: index.html"); // redirect to thank you page
}
?>