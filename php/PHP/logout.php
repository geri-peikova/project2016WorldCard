<?php

	session_start();
	unset($_SESSION['password']);
	unset($_SESSION['email']);
	
	header("Location: index.php");

?>