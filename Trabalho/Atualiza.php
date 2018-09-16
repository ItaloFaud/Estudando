<?php

if (isset($_GET['logout'])) {
	if ($_GET['logout'] == 's') {
		session_start();
		session_destroy();
		unlink($_SESSION['usu']);
		header('location:index.php');

	}
}

?>