<?php
	$fname = @trim(stripslashes($_POST['firstName']));
	$lname = @trim(stripslashes($_POST['lastName']));
	$zipcode = @trim(stripslashes($_POST['zipCode']));
	$tel = @trim(stripslashes($_POST['phoneNumber']));
	$email = @trim(stripslashes($_POST['emailAddress']));

	$email_from = $email;
	$email_to = 'dawson.kacey@gmail.com';//replace with your email

	$body = 'First Name: ' . $fname . "\n\n"
	. 'Last Name: ' . $lname . "\n\n" 
	. 'Zip Code: ' . $zipcode . "\n\n" 
	. 'Telephone: ' . $tel . "\n\n"
	. 'Email: ' . $email;

	$success = @mail($email_to, $body, 'First Name: ' . $fname . "\n\n"
	. 'Last Name: ' . $lname . "\n\n" 
	. 'Zip Code: ' . $zipcode . "\n\n" 
	. 'Telephone: ' . $tel . "\n\n"
	. 'Email: ' . $email);
?>

<!DOCTYPE HTML>
<html>
<head>
	<script>alert("Thank you for getting in contact. I look forward to reading your message and will reach back out to you as necessary.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=/index.php"> 
</head>