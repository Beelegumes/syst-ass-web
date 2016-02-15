<?php
 
if(isset($_POST["Submit"]))
{
require("c:\php\includes\class.phpmailer.php");
 
$mail = new PHPMailer();
 
////////////////////////////////////////////////////////////////
// Customize the following 5 lines with your own information. //
////////////////////////////////////////////////////////////////
 
$toaddress = "sabiennial2015@systass.org";  //Change this to the email address you will be receiving your notices.
$mailhost = "mail.systass.org";  //Change this to your actual Domain name.
$fromaddress = "sabiennial2015@systass.org";  //Change this to the email address you will use to send and authenticate with.
$frompwd = "S8EjeBraya";  //Change this to the above email addresses password.
$subject = "SA Biennial 2015 - register interest";  //Change this to your own email message subject.
 
//////////////////////////////////////////
// DO NOT CHANGE ANYTHING PAST THIS LINE//
//////////////////////////////////////////
 
$fromname = $_POST["TName"];
$body = $_POST["TBody"] ;
$rplyto = $_POST["TEmail"];
$msgbody = $fromname . " $ " . $rplyto . "<br>" . $body;
 
$mail->IsSMTP();
$mail->Host = $mailhost;
$mail->SMTPAuth = true;
$mail->Username = $fromaddress;
$mail->Password = $frompwd;
 
$mail->From = $fromaddress;
$mail->FromName = $fromname;
$mail->AddReplyTo($rplyto);
$mail->AddAddress($toaddress);
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $msgbody;
 
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
 
echo "Thank you, your message has been sent!";
}
 
?>

<html><body style="margin:5px 10px 0 10px;padding:10px;color:#000000;background-color:#999999;font-family:'Trebuchet MS',Verdana,Tahoma,Arial,'Arial Black',Helvetica,'Century Gothic','Lucida Sans Unicode',Impact,sans-serif;font-size:small">
<p>Please register you interest using the form below.  Once more details are 
available you will be informed</p>

<form name="SendEmail01" method="post">
<table border=0>
<tr>
        <td>Name:</td>
        <td><input type="text" name="TName" size="40"></td>
</tr>
<tr>
        <td>Email:</td>
        <td><input type="text" name="TEmail" size="40"></td>
</tr>
<tr>
        <td><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>
