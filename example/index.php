<?php 
	use Lablnet\Encryption;
	require '../vendor/autoload.php';
	
	$encryption = new Encryption("daskfasdjf432f4sd54ggfadgfs4df564asd");
	
	//Encrypt the message
	$encrypt = $encryption->encrypt("This is a text");
	
	echo $encrypt;
	echo "<br\>";
	
	//Decrypt the message
	$decrypt = $encryption->decrypt($encrypt);	
	echo $decrypt;
