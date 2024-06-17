<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
$email_form= 'mynewwebsite@gmail.com';
$email_subject= 'New Form Submission';
$email_body= "User Name:$name.\n".
$email_body= "User Email:$visitor_email.\n".
$email_body= "Subject:$Subject.\n".
$email_body= "User Message:$Message.\n".
$to ='mynewwebsite@gmail.com';
$headers ="Form: $email_form\r\n"
$headers ="Reply-To: $visitor_email\r\n"
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html")
?>