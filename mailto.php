<form action="email.php" method="post">
   <input type="email" name="to" placeholder="Recipient Email">
   <input type="text" name="subject" placeholder="Subject">
   <textarea name="message" placeholder="Message"></textarea>
   <button type="submit">Send Email</button>
 </form>
 
 <!-- email.php -->
 <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $to = $_POST['to'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $headers = "From: sender@example.com\r\n";
     mail($to, $subject, $message, $headers);
   }
 ?>
 

 <?php
$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>