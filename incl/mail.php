<?php 
$message = "Привееет!";

// mail("mg_saint@yahoo.com", "the subject", $message, 
//      "From: webmaster@ example.com \r\n" 
//     ."X-Mailer: PHP/" . phpversion()); 

if (mail("mg_saint@yahoo.com", "Registration", $message, 
     "From: webmaster@example.com \r\n")) { 
        echo "messege acepted for delivery"; 
    } else { 
        echo "some error happen"; 
    } 
?>