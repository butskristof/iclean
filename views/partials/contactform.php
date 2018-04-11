<?php

if (!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['msgcontent'];
	$from = 'iClean contactformulier';
	$to = 'iclean@kristofbuts.be';
	$subject = 'Bericht van contactformulier';

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	$errors = [];

	// Check if name has been entered
	if (!$_POST['name']) {
		$errors[] = 'Geef uw naam in.';
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error[] = 'Geef een geldig mailadres op.';
	}

	//Check if message has been entered
	if (!$_POST['msgcontent']) {
		$errors[] = 'Geef uw bericht in.';
	}

	// If there are no errors, send the email
//	if (!$errName && !$errEmail && !$errMessage) {
	if (empty($errors)) {
		if (mail ($to, $subject, $body, $from)) {
			echo '<div class="alert alert-success">Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.</div>';
		} else {
			echo '<div class="alert alert-danger">Er ging iets mis met het versturen van uw bericht, gelieve opnieuw te proberen.</div>';
		}
	}
}

?>