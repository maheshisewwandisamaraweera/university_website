<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subjects = $_POST['subjects'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submition';
$email_body = "User Name: $name.\n". 
              "User Name: $visitor_email.\n". 
              "Subjects:$subjects.\n".  
              "User Message: $message.\n";


 $to = 'maheshisewwandisamaraweera@gmail.com' ;
 $headers = "From: $email_from \r\n"; 
 $headers.= "Reply-To: $visitor_email \r\n" ; 
 
 mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");


?>