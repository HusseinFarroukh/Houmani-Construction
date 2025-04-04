<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $company = $_POST['namecompany'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'marketing@houmani.info'; // Replace with your own email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nCompany: $company\nPhone Number: $number\nEmail: $email\nMessage: $message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for contacting us. We will get back to you soon!';
  } else {
    echo 'Sorry, there was an error sending your message.';
  }
}
?>

