<?php

if (isset($_REQUEST['email'])) {
   $message = "<html>
   <head>
     <title>Some title</title>
   </head>
   <body><table>";
   $message .= "<tr><td>First Name: " . $_REQUEST['fname'] . "</td></tr>";
   $message .= "<tr><td>Last Name: " . $_REQUEST['lname'] . "</td></tr>";
   $message .= "<tr><td>Email: " . $_REQUEST['email'] . "</td></tr>";
   $message .= "<tr><td>Phone: " . $_REQUEST['phone'] . "</td></tr>";
   $message .= "<tr><td>Checked Option: " . $_REQUEST['radio-opt'] . "</td></tr>";
   $message .= "<tr><td>Message: " . $_REQUEST['message'] . "</td></tr>";
   
   $message .= "</table></body></html>";
  
   
   
   $to = 'Info@autismcommunityventures.org'; 
   $subject = 'Autism Community Ventures Enquiry';
    $headers = "From: " . strip_tags($_REQUEST['email']) . "\r\n";
	 $headers .= "Reply-To: ". strip_tags($_REQUEST['email']) . "\r\n";
	  $headers .= "CC: maureen@autismcommunityventures.org\r\n"; 
	  $headers .= "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   $send = mail($to, $subject, $message, $headers);
   if ($send) {
     
	 header('Location: http://autismcommunityventures.org/contact-us-response.html');
   } else {
	   	   echo "Your message is not sent!";

     
   }
}
?> 
