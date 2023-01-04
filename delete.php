<?php 

include('conexao.php');
$id = $_GET['id'];
$code = "DELETE FROM usuario WHERE id = '$id'";
$query = $link->query($code) or die($link->error);

if ($query) {
	echo "<script> location.href='index.php?p=inicial';
	location.href='arquivados.php' </script>";
}else{
	echo "<script> alert('Não foi possível deletar o usuario.');
	location.href='index.php?p=inicial'; </script>";
}
?>


	
