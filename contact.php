<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$to = "support@g1healthapp.com";
$subject = "G1 Health: Email from contact page - New request from " . ucwords($name);

$message = "
<html>
<head>
<title>CONTACT DETAILS</title>
</head>
<body><br />

'''''''''''''''''''''''''''''<br />
Enquiry Details<br />
'''''''''''''''''''''''''''''<br /><br />

Name  	&nbsp;&nbsp;&nbsp;	: &nbsp;		".$name."<br /><br />
Email ID&nbsp;&nbsp;	:	&nbsp;			".$email."<br /><br />
Mobile Number&nbsp;&nbsp;	:	&nbsp;			".$mobile."<br /><br />
Message	&nbsp;	:<br /><pre>".$message."</pre>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:' . "\r\n";
$headers .= 'From: G1 Health App <support@g1healthapp.com>' . "\r\n";

mail($to,$subject,$message,$headers);
return true;
?>