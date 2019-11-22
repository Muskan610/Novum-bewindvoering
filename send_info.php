<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";

session_start();

if(isset($_POST["reset-request-submit"]))
	{
		$selector = bin2hex(openssl_random_pseudo_bytes(8));	//to authenticate the correct user
		$token = openssl_random_pseudo_bytes(32);//to look in DB for token for respective user, //2 tokens to prevent timing attacks
		$userEmail = $_POST["email"];

    $to = $userEmail;
	$subject = "Reset your password for The Coding Essentials";
	$message = "We recieved your password reset request. The link to reset your password is given below.\r\n";
	$message .= "Note that this link is valid for 30 minutes only.\r\n";
	$message .="If you did not make this request, you can ignore this email.\r\n";
	$message .="Here is your password link: " .$url; 

	$headers = "From: The Coding Essentials <s636130@server.infhaarlem.nl>\r\n";
	
	mail($to, $subject, $message, $headers); 			

	$_SESSION["url"]=$url; //temporary, delete this later

	header("Location: index.pwdreset.php?reset=success");

}

else{
	header("Location: index.php");
}

	?>