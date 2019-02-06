<?php 
	use Lablnet\Encryption;
	require '../vendor/autoload.php';
	
	$encryption = new Encryption();
	
	//Encrypt the message
	$encrypt = $encryption->encrypt("This is a text");
	
	var_dump($encrypt);
	echo "<br\>";
	
	//Decrypt the message
	$decrypt = $encryption->decrypt($encrypt);	
	var_dump($decrypt);