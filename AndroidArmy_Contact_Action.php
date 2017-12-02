<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$manufacturer =  $_REQUEST['manufacturer'];
$phone =  $_REQUEST['phone'];
$version =  $_REQUEST['version'];
$comment = $_REQUEST['comment'];
$formcontent=" From: $name \n Manufacturer: $manufacturer \n Phone: $phone \n Version: $version \n Comment: $comment";
$recipient = "euki8203@colorado.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";


if (!empty ($_REQUEST['email']) && ($_REQUEST['comment']) && ($_REQUEST['name'])) {
  mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you $name, your message has been received.";
exit;
}

if ( (empty ($_REQUEST['email'])) && (empty ($_REQUEST['comment'])) ) {
echo "ERROR, you did not fill in the <b>Email</b> and the <b>Comment</b> body.";
exit;
}

elseif ( (empty ($_REQUEST['email'])) && (empty ($_REQUEST['name'])) ) {
echo "ERROR, you did not fill in the <b>Email</b> and the <b>Name</b> body";
exit;
}

elseif ( (empty ($_REQUEST['name'])) && (empty ($_REQUEST['comment'])) ) {
echo "ERROR, you did not fill in the <b>Name</b> and the <b>Comment</b> body.";
exit;
}

elseif (empty ($_REQUEST['email'])) {
echo "ERROR, you did not fill in your <b>Email.</b> body";
exit;
}

elseif (empty ($_REQUEST['comment'])) {
echo "ERROR, you did not fill in the <b>Comment</b> body.";
exit;
}

elseif (empty ($_REQUEST['name'])) {
echo "ERROR, you did not fill in the <b>Name</b> body.";
exit;
}

?>
