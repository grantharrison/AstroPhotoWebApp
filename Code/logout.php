<?php
    // Set the cookie to expire
	setcookie('username', '', 1);
    // And redirect the user to the login
	header("Location: index.php");
	exit;
?>
