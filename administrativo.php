<?php
session_start();

if (!empty($_SESSION['id'])) {

	header("Location: index.php");
} else {
	header("Location: login.php");
}
?>