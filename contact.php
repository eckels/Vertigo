<?php

$from=$_POST['email'];
$email="contact@vertigo.gg";
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ( $email, $subject, $message, "From:".$from);

header("Location: http://vertigo.gg/formsent.html");
exit;

?>
