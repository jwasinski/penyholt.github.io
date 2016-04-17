<?php

date_default_timezone_set('Europe/London');

$todayis = date("l, F j, Y, g:i a") ;

$name=$_POST["name"];

echo($name);

$subject = "Pen-y-Holt Enquiry From ".$name;

$notes = stripcslashes($_POST["question"]);

$message = "$todayis [GMT]\r\n$notes \r\n";

$from = "From: ".$_POST["email"];

$emailToSend='annewasinski@gmail.com';


$headers = "From: annewasinski@gmail.com"."\r\n".
 
"Reply-To: ".$_POST["email"]."\r\n" .
 
"X-Mailer: PHP/" . phpversion();
 
@mail($emailToSend, $subject, $message, $headers);  


?>
