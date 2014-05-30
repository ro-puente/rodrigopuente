<?php

if($_POST['email'] && $_POST['name'] && $_POST['message'] && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message'])){

	$to      = 'rodrigoramos89@gmail.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

}else{
	echo "UFFFF";
}
var_dump($_POST['email']);
var_dump($_POST['name']);
var_dump($_POST['message']);