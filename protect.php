<?php
if (!isset($_SESSION)) {
	session_start();
}

if (!isset($_SESSION['name_user'])) {
	header("Location: Acesso_negado.php");
	die();

}

?>

