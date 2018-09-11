<?php     
$to_email = 'niroshakannan17@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: niroshajeyalakshmi@gmail.com';
mail($to_email,$subject,$message,$headers);
?>