<?php

$from=$_POST['email'];
$to="applications@vertigo.gg";
$subject="Competitive Application";
$message =" IGN: ";
$message .=$_POST['ign'];
$message .="\r\n HIGHEST SEASON 0 TIER: ";
$message .=$_POST['season0tier'];
$message .="\r\n HIGHEST SEASON 1 TIER: ";
$message .=$_POST['season1tier'];
$message .="\r\n HIGHEST SEASON 2 TIER: ";
$message .=$_POST['season2tier'];
$message .="\r\n WHAT POSITIONS CAN YOU PLAY COMPETITIVELY?: ";
$message .=$_POST['position'];
$message .=" ";
$message .=$_POST['position2'];
$message .=" ";
$message .=$_POST['position3'];
$message .="\r\n HOW MANY HOURS CAN YOU PLAY A WEEK? ";
$message .=$_POST['hours'];
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
