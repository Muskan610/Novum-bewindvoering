<?php
declare(strict_types=1);

if(isset($_POST["submit"]))
	{
		$voornaam = $_POST["Voornaam"];
		$achternaam = $_POST["Achternaam"];
		$email = $_POST["email"];
		$subjectKlant = $_POST["Onderwerp"];

    $to = "info@novumbewindvoering.nl";
	$subject = "Contactverzoek van ".$voornaam." ".$achternaam;
	$message = $voornaam." ".$achternaam." wil contact met u opnemen.\r\n";
	$message .= " Hieronder zijn de details.\r\n";
	$message .= " Naam: ".$voornaam." ".$achternaam."\r\n";
	$message .= " Email: ".$email."\r\n";
	$message .= " Onderwerp: ".$subjectKlant."\r\n";

	$headers = "From: Novum Bewindvoering en advies\r\n";
	
	mail($to, $subject, $message, $headers); 	
	
	header("Location: contact.php?infoSent=success");
	}

else{
	header("Location: contact.php");
}

	?>