<?php  

	$name = $_GET['name'];
	$email = $_GET['email'];
	$contact_message = isset( $_GET['message'] ) ? $_GET['message'] : '-';

	// Cambiar por  contacto@sunland.mx
	$to = 'arisbeth.hg@gmail.com';
	$subject = 'Contacto desde portafolio';
	$headers = 'From: Hola Arisbeth <arisbeth.hg@gmail.com>' . "\r\n";
	$headers .= "Reply-To: arisbeth.hg@gmail.com\r\n";
	$headers .= "Return-Path: arisbeth.hg@gmail.com\r\n";
	$headers .= "CC: arisbeth.hg@gmail.com\r\n";
	$headers .= "BCC: arisbeth.hg@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<p>'.$name.' te a contactado desde tu bellisimo portafolio web ' . $instrument . '</p>';
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