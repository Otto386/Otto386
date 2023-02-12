<?php

if(isset($_POST['submit'])) {
  $to = "worksearch8888@seznam.cz";
  $subject = "Form Submission";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "The email was sent successfully.";
  } else {
    echo "There was an error sending the email.";
  }
}

?>
