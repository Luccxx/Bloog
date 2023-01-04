<?php 
include('protect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Publicação Sucedida!</title>
	<link rel="website icon" type="png" href="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0">
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Bahianita&family=Nova+Flat&family=Roboto:wght@400;500&family=Stalinist+One&display=swap');
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
		.cabecalho{
			font-family: 'Roboto', sans-serif;
			position: absolute;
			left: 65px;
			font-size: 30px;
		}
		.what{
			position: absolute;
			left: 70px;
			top: 220px;
			padding-top: 5px;
			font-size: 20px;
		}
		.lista{
			position: absolute;
			left: 88px;
			top: 260px;
			font-size: 20px;
		}
		.user{
			position: relative;
			top: -29px;
			right: 70px;
			font-size: 18px;
			color: white;
		}
		.what,
		.lista{
			padding-top: 25px;
		}
	</style>

	

	<main class="titulo">
		<div class="titulo">
		<a href="home.php"><img src="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0" width="50" height="50"></a>

		</div>
		<div class="text">
			N o C O N T E X T
		</div>
		<div class="user" style="text-align: right;">
			<?php echo $_SESSION['name_user']; ?>
		</div>
		<div class="login" style="text-align: right;">
				<a href="" style="color: white;">[Sair]</a>
		</div>

	</main>
	
	<main class="container">
		<form>
			<tr>
				<td>
					<a href="" style="color: white;">Bem-vindo</a>
					<a href="" style="color: white;">Procurar</a>
					<a href="" style="color: white;">Ajuda</a>
					<a href="" style="color: white;">Sobre</a>
				</td>
				
			</tr>
			
		</form>
	</main>

	<div class="cabecalho">
		<?php
			include("conexao.php");

			$date = date('Y-m-d');
			$texto = $_POST['texto'];

			$sql = "insert into usuario(info, dt_hr) values ('$texto', '$date')"; 

			if (mysqli_query($link, $sql)) {

			}else{
				echo "Erro no Envio" .mysqli_connect_error($link);
			}
			mysqli_close($link);
		?>
		<h1>Publicação Bem Sucedida!</h1>

	</div>
	<div class="what">
		O que você quer fazer a seguir?
	</div>
	<div class="lista">
		<li>
			<a href="viewPost.php" style="color: black;">Ver minha Publicação</a>

		</li>
		<li>
			<a href="home.php" style="color: black;">Criar uma nova Publicação</a>
		</li>
		<li>
			<a href="arquivados.php" style="color: black;">Minhas Publicações
		</li>
	</div>
</body>
</html>