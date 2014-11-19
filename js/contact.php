<?php

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

$field_name = $_POST['txt_input_name'];
$field_email = $_POST['txt_input_email'];
$field_phone = $_POST['txt_input_phone'];
$field_message = $_POST['txt_input_msg'];

$mail_to = 'Evelyn.McDonald@hotmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone Number: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

debug_to_console($mail_to);
debug_to_console($field_name);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thanks for your message!');
		window.location = '../index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Uh oh! Message failed.');
		window.location = '../index.html';
	</script>
<?php
}
?>