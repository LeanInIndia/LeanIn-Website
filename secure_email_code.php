<?php
if(isset($_POST["send"])){
// Checking For Blank Fields..
if($_POST["headline"]==""||$_POST["email"]==""||$_POST["story"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = "Lean In story";
$story = "Email ID : ".$email."\nHeadline : ".$_POST['headline']."\n".$_POST['story'];

$headers = 'From:'. $email . "\r\n"; // Sender's Email
//$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender

// Message lines should not exceed 70 characters (PHP rule), so wrap it
//$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("infoatleanindia@gmail.com", $subject, $story, $headers);
echo "Your story has been submitted successfully ! Our editors will get back to you, if your story gets selected! Thank you. ";
}
}
}
?>