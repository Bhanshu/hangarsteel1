<?php

include('../../../../wp-config.php');
global $wpdb;
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phn'];
$email = $_POST['emaill'];
$option1 = $_POST["contact1"];

// $file = $_POST['uploaded'];
$admin_email = get_option( 'admin_email' ); 
// $admin_email = "steelcorbldgs@gmail.com"; 
$client1 = get_field('client_email1',5); 
// echo"$client1";

// $client2 = get_field('client_email2',5);
// echo"$client2";
require_once ABSPATH.'wp-content/themes/hanger-steel/mailer/class.phpmailer.php';
$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
try
{
  $mail->AddReplyTo('caquesinberry@aol.com', 'Hangar Steel');
  $mail->AddAddress($admin_email);
  $mail->AddAddress($client1);
  // $mail->AddAddress($client2);
  $mail->SetFrom('nadia.kaloyanova@gmail.com', 'Hangar Steel');
  $mail->Subject = 'Contact Us';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $file=ABSPATH.'wp-content/themes/hanger-steel/ajax/admin-mail/admin-mail-contactUs.html';
  $emailBody = file_get_contents($file);
	$search  = array('[[fname]]', '[[lname]]', '[[phone]]', '[[email]]','[[option1]]');
	$replace = array($fname, $lname,$phone,$email,$option1); 
	
	$emailBody  = str_replace($search, $replace, $emailBody);
  $mail->MsgHTML( $emailBody );
 
  $mail->Send();
  //echo "Message Sent OK</p>\n";
} 
catch (phpmailerException $e) 
{
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) 
{
  echo $e->getMessage(); //Boring error messages from anything else!
}


?>