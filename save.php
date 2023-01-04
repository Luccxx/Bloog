<?php 
	include('conexao.php');

	if (isset($_POST['save'])) {
		$id=$_POST['id'];
		$info = $_POST['info'];

		$sqlUpdate = "UPDATE usuario SET info='$info' WHERE id='$id'";
		$result = $link->query($sqlUpdate) or die($link->error);
	}

	header("Location: arquivados.php");
 ?>