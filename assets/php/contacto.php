<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_message = isset( $_POST['message'] ) ? $_POST['message'] : '-';

	// Cambiar por arisbeth.hg@gmail.com
	$to = 'arisbeth.hg@gmail.com';
	$subject = 'Informes acerca de clases particulares';
	$headers = 'From: Portafolio Arisbeth <arisbeth.hg@gmail.com>' . "\r\n";
	$headers .= "Reply-To: arisbeth.hg@gmail.com\r\n";
	$headers .= "Return-Path: arisbeth.hg@gmail.com\r\n";
	$headers .= "CC: arisbeth.hg@gmail.com\r\n";
	$headers .= "BCC: arisbeth.hg@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<p>'.$name.' Te contacto desde portafolio web ';
	$message .= '<p>Email: '. $email . '</p>';
	if( $contact_message != '' ) $message .= '<p>Mensaje: '. $contact_message . '</p>';
	$message .= '</body></html>';

	mail($to, $subject, $message, $headers );

	$message = array(
		'error'		=> 0,
		'name'	=> $name,
		);
	echo json_encode($message , JSON_FORCE_OBJECT);


?>
