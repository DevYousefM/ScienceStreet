<?php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

	$output = json_encode(
		array(
			//create JSON data
			'type' => 'error',
			'text' => 'Sorry Request must be Ajax POST'
		)
	);
	die($output); //exit script outputting json data
}
$user_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
$user_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST["subject"], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);


if (!empty($user_email) && !empty($message)) {
	if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
		$receiver = "thesciencestreet.online@gmail.com";
		$mailFrom = "From: $user_name <$user_email>";
		$body = "Name: $user_name\nEmail: $user_email\nSubject: $subject\n\nMessage:\n$message\n\nRegards,\n$user_name";
		$sender = "From: $user_email";

		if (mail($receiver, $subject, $body, $mailFrom)) {
			$output = json_encode(
				array(
					'type' => 'message',
					'text' => '<div class="alert alert-success" role="alert">
		Hi ' . $user_name . ', Thank you very much for your message, we will contact you soon.</div>'
				)
			);
			die($output);


		} else {
			$output = json_encode(array('type' => 'error', 'text' => '<p>Could not send mail! Please check your PHP mail configuration.</p>'));
			die($output);
		}
	} else {
		$output = json_encode(array('type' => 'error', 'text' => '<p>Enter a valid email address!</p>'));
		die($output);
	}
} else {
	$output = json_encode(array('type' => 'error', 'text' => '<p>Email and message field is required!</p>'));
	die($output);
}
?>