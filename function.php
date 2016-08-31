<?php
error_reporting(E_ALL & ~E_NOTICE);
	
// Generate a random key.
function KeyGen($length = 12) {
	$key = ''; // Prepare 'key' variable.
	$i = 0; // Prepare 'i' for the while.
	$charactersAllowed = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // All characters allowed. Characters can be add or remove.
	
	$lengthMax = strlen($charactersAllowed); // Find how many character is allowed.
	if( $length > $lengthMax ) { // If the desired length is too long...
		$length = $lengthMax; // Set the length to the length max.
	}
	
	while($i < $length) {
		$randomCharacter = substr($charactersAllowed, mt_rand(0, $lengthMax-1), 1);
		
		if(!strstr($key, $randomCharacter)) { // If the character is not already in the key...
			$key .= $randomCharacter; // Add the character in the key 
			$i++; // Add 1 to the counter
		}
	}
	
	return $key; // Return the key
}

// Check Error
function CheckError($error, $lang) {
	if($error == '') // If $error is empty, no error.
		$errorMessage = '';
	else if($error == 'ERR_NO_FILE') { // ERR_NO_FILE -> No file sent.
		if($lang == 'fr')
			$errorMessage = 'Vous n\'avez pas envoy&eacute; de fichier.';
		else
			$errorMessage = 'Vous n\'avez pas envoy&eacute; de fichier.';
	}
	else if($error == 'ERR_SIZE') { // ERR_SIZE -> File too big (PHP, Form or verification
		if($lang == 'fr')
			$errorMessage = 'L\'image est trop lourde.';
		else
			$errorMessage = 'The image is too big.';
	}
	else if($error == 'ERR_PARTIAL') { // ERR_PARTIAL -> Partially uploaded file
		if($lang == 'fr')
			$errorMessage = 'Le transfert de l\'image a &eacute;chou&eacute;.';
		else
			$errorMessage = 'The image transfer failed.';
	}
	else if($error == 'ERR_TYPE') { // ERR_TYPE -> Wrong type of file
		if($lang == 'fr')
			$errorMessage = 'Le type du fichier envoy&eacute; n\'est pas permis.';
		else
			$errorMessage = 'The type of the file is not allowed.';
	}
	else {
		if($lang == 'fr')
			$errorMessage = 'Erreur inconnue.';
		else
			$errorMessage = 'Unkown error.';
	}
	
	return $errorMessage;
}
	
?>