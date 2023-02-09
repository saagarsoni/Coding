<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "saagarsoniwork@gmail.com";
  $subject = "Message from $name";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  mail($to, $subject, $message, $headers);
  
  echo "Your message has been sent!";
}
?>
