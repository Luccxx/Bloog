<?php 
include('protect.php');
?>

<?php 

include("conexao.php");

$consulta = "SELECT * FROM usuario ORDER BY id DESC;";	
$con = $link->query($consulta) or die($link->error);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Publicações</title>
	<link rel="website icon" type="png" href="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0">
</head>
<body>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			border: 0;
		}

		main.titulo{
			background-color: #6A5ACD;
			background-size: 5%;
		}

		.text{
			color: white;
			position: absolute;
			font-size: 35px;
			top: 17px;
			left: 70px;
			font-weight: bold;
		}

		.login{
			position: relative;
			top: -50px;
			right: 25px;
			font-size: 17px;
		}

		main.container{
			background: #1C1C1C;
			color: white;
			position: relative;
			top: -15px;
			padding-left: 65px;
			padding-bottom: 5px;
			height: 17px;
			width: auto;
		}

		.view{
			font-size: 25px;
			text-align: justify;
			text-align: right;	
		}
		.data-a{
			text-align: right;
			right: 30px;
			border-radius: 5px;
			font-size: 20px;
		}

		.info{
			padding-top: 5px;
			padding-right: 30px;
			padding-left: 30px;
			height: auto;
			width: 110;
			text-align: justify;
			padding-bottom: 15px;
		}
		.butao_see{
			text-align: right;
			position: absolute;
			right: 70px;
			border-radius: 5px;
			font-size: 20px;
		}
		.delete{
			text-align: right;
			position: absolute;
			right: 2px;
			border-radius: 5px;
			font-size: 20px;
		}
		.newpost{
			position: absolute;
			top: 265px;
			text-align: right;
			right: 130px;
		}
		.user{
			position: relative;
			top: -29px;
			right: 70px;
			font-size: 18px;
			color: white;
		}
		.login-a{
			text-align: center;
			padding-left: 25px;
			font-size: 20px;
		}
	</style>
	<main class="titulo">
		<div class="titulo">
		<a href="home.php"><img src="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0" width="50" height="50"> </a>

		</div>
		<div class="text">
			N o C O N T E X T
		</div>
		<div class="user" style="text-align: right;">
			<?php echo $_SESSION['name_user']; ?>
		</div>
		<div class="login" style="text-align: right;">
				<a href="painelLogin.php" style="color: white;">[Sair]</a>
		</div>

	</main>
	
	<main class="container">
		<form>
			<tr>
				<td>
					<a href="home.php" style="color: white;">Bem-vindo</a>
					<a href="" style="color: white;">Procurar</a>
					<a href="" style="color: white;">Ajuda</a>
					<a href="" style="color: white;">Sobre</a>
				</td>
				
			</tr>
			
		</form>
	</main>

	<div class="view">
		<div class="login-a">
				<h1>Publicações de <?php echo $_SESSION['name_user']; ?></h1>
			</div>
		<center>
			<?php while ($dado = $con->fetch_array()){ ?>
			<br>
			<div class="data-a">
				Data -
				<?php echo date('Y-m-d', strtotime(($dado["dt_hr"]))); ?>
			</div>
			<div class="newpost">
				<button><a href="home.php" style="color: black;">Nova Publicação</a></button>
			</div>
			<div class="butao_see">
				<button><a href="edit.php?p=edit&id=<?php echo $dado['id']; ?>" style="color: blue;">Editar</a></button>
			</div>
			<div class="delete">
				<button><a href="delete.php?p=deletar&id=<?php echo $dado['id']; ?>"  style="color: red;">Deletar</a></button>
			</div>
			<div class="info">
				<br>
				<?php echo $dado["info"]; ?>
				<br>
			</div>
			
			<?php } ?>
		</center>
	</div>
</body>
</html>