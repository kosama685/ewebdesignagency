<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "sales@webnapphub.com";

# SUBJECT (Subscribe/Remove)
$subject = "Webnapphub";
// $ebpage = "App development";

# RESULT PAGE
$location = "https://webnapphub.com/thankyou";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "sales@webnapphub.com";

# MAIL BODY
$subscriber_email = $_REQUEST['Email'];
$subscriber_subject = "Thankyou!! One of Our Consultant Will Get Back To you Shortly
";
// $subscriber_email_data = file_get_contents('https://empathetixwellness.com/email/queryFormThankyou.html');

if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['Name']) && $_REQUEST['Name'] != "" 
  && isset($_REQUEST['Email']) && $_REQUEST['Email'] != ""){




$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";

$body .= "Message: ".$_REQUEST['Message']." \n";
$body .= "Subject: ".$_REQUEST['Subject']." \n";








// $body .= "Page: ".$ebpage." \n";

if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into banner_inquiry (bn_name, bn_email, bn_number, pc, ctry, cip, message, service, package, page_URL ) values ("'.$_REQUEST['Name'].'","'.$_REQUEST['Email'].'","'.$_REQUEST['Number'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['cip'].'","'.$_REQUEST['Message'].'","'.$_REQUEST['Service'].'","'.$_REQUEST['Package'].'","'.$_REQUEST['locationURL'].'")';
mysqli_query($con,$sql);
mysqli_close($con);
}


$headers = 'From: <sales@webnapphub.com>' . "\r\n" . 'Reply-To: <sales@webnapphub.com>';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );

 }

    
}

?>