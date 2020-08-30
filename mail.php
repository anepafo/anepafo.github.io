<?php
$name = $_POST['name'];
$businessName = $_POST['businessName'];
$email = $_POST['email'];
$website = $_POST['website'];
$menuExists = $_POST['menuExists'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$type = $_POST['request'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Menu exists: $menuExists \n Website: $website \n Request: $type \n Message: $message";
$recipient = "trif.tz@gmail.com";
$subject = "Anepafo Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script>
             alert('Message sent succesfully'); 
             window.history.go(-1);
     </script>";
?>