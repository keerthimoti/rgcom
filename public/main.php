<?php
if(isset($_POST['submit']))
{

$name= $_POST['name'];
$email= $_POST['email'];
$description= $_POST['subject'];
$detail= $_POST['message'];

$subject = "Customer Contact Details";

$message .= "Name   : $name \n";
$message .= "Email ID : $email \n";
$message .= "Subject : $description \n";
$message .= " Message  :  $detail \n";


echo"<hr>";
$to      = 'magzappu@gmail.com';
$headers = 'From: magzappu@gmail.com' . "\r\n" .
    'Reply-To: magzappu@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<script>
{
alert('Message send successfully !!!');
document.location='index.php';
}
</script>";
}
	
 ?>