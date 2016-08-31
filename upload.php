<?php
// Include the function file.
require 'function.php';

// Variables
$key = '';
$maxSize = 4194304; // Set the max size of the picture (default: 1 Mo = 1048576 octets)
$extensionsAllowed = array('jpg', 'jpeg', 'gif', 'png'); // Set the extensions allowed.
$extensionFile = strtolower(substr(strrchr($_FILES['image']['name'], '.'),1));

/** All Errors :
 *
 * ERR_NO_FILE -> No file sent.
 * ERR_SIZE -> File too big (PHP, Form or verification)
 * ERR_PARTIAL -> Partially uploaded file
 * ERR_TYPE -> Wrong type of file
 */
?>

<?php
/** Verification */

if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) { // No file sent.
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_NO_FILE');
}
else if ($_FILES['image']['error'] == UPLOAD_ERR_INI_SIZE) { // File too big (PHP).
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_SIZE');
}
else if ($_FILES['image']['error'] == UPLOAD_ERR_FORM_SIZE) { // File too big (Form).
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_SIZE');
}
else if ($_FILES['image']['error'] == UPLOAD_ERR_PARTIAL ) { // Partially uploaded file.
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_PARTIAL');
}
else if($_FILES['image']['size'] > $maxSize) { // File too big.
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_SIZE');
}
else if(in_array($extensionFile, $extensionsAllowed)) { // Good type of file

	/** Save file */

	do {
		$key = KeyGen(12); // Set the random name of the file.
	} while(file_exists('i/' . $key . '.*')); // If exist, generate again.
	
	$dirName = 'i/' . $key . '.' . $extensionFile; // Set where the file will be saved
	$saveFile = move_uploaded_file($_FILES['image']['tmp_name'], $dirName); // Prepare varible for save
	if ($saveFile) { // Execute the variable. If it work, redirect to this file.
		header('Location: ' . $dirName);
	}
}
else { // Unkown Error
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_UNKOWN');
}
?>