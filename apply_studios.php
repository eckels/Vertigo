<?php

$from=$_POST['email'];
$to="applications@vertigo.gg";
$subject="Vertigo Studios Application";
$message =" IGN: ";
$message .=$_POST['ign'];
$message .="\r\n WHAT TYPE OF CONTENT DO YOU HOPE TO PRODUCE FOR OUR GUILD? ";
$message .=$_POST['content'];
$message .="\r\n WHAT ARE YOUR GOALS IN VERTIGO ESPORTS AND THE COMMUNITY? ";
$message .=$_POST['goals'];
$message .="\r\n WILL YOU BE ABLE TO USE TEAMSPEAK, TWITTER, AND BAND? ";
$message .=$_POST['media'];
$message .="\r\n TELL US A LITTLE MORE ABOUT YOURSELF AND YOUR EXPERIENCE. ";
$message .=$_POST['biography'];


mail ( $to, $subject, $message, "From:".$from);

header("Location: http://vertigo.gg/formsent.html");
exit;

?>
