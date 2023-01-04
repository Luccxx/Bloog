<?php 
include('conexao.php');

if (isset($_POST['login']) || isset($_POST['senha'])) {
	if(strlen($_POST['login']) == 0){
		echo "Prencha seu login";
	}else if (strlen($_POST['senha']) == 0) {
		echo "Prencha sua senha";
	}else{

		$login = mysqli_real_escape_string($link, $_POST['login']);
		$senha = mysqli_real_escape_string($link, $_POST['senha']);

		$sql = "SELECT * FROM user_name WHERE login = '$login' AND senha = '$senha'";
		$sql_query = $link->query($sql) or die("FALHA NA EXECUÇÃO DO CODIGO SQL: ". $link->error);

		$qtd = $sql_query->num_rows;

		if ($qtd == 1) {
			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)){
				session_start();
			}

			$_SESSION['id_user'] = $usuario['id_user'];
			$_SESSION['name_user'] = $usuario['name_user'];

			header("Location: home.php");

		}else{
			echo "Falha ao logar! Login ou senha incorretos";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NoContext.com</title>
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
			height: 59px;
		}

		.text{
			color: white;
			position: absolute;
			font-size: 35px;
			top: 17px;
			left: 70px;
			font-weight: bold;
		}

		main.container{
			background: #1C1C1C;
			padding-left: 65px;
			padding-bottom: 5px;
			height: 17px;
			width: auto;
		}
		.logar{
			position: relative;
			right: 80px;
			top: -30px;
		}
		.entrar input{
			position: relative;
			right: 15px;
			top: -49px;
			height: auto;
			width: 60px;
			background: #D3D3D3;
			border-radius: 2px;
		}
		.login input{
			background: #D3D3D3;
		}
		main.content{
			position: relative;
			top: 20px;
			left: 30px;
			font-size: 20px;
		}

	</style>
	<main class="titulo">
		<div class="titulo">
		<img src="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0" width="50" height="50"> 

		</div>
		<div class="text">
			N o C O N T E X T
		</div>
		<form action="" method="POST">
			<div class="logar" style="text-align: right;">
					
				<input type="email" name="login" id="login" style="border: solid 1px;">
				<input type="password" name="senha" id="senha" style="border: solid 1px;"><br>

			</div>
			<div class="entrar" style="text-align: right;">
					<input type="submit" style="border: solid 1px;" name="" value="Entrar">
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
	<main class="content">
		<h1>NoContext.com</h1>
		<h2>Sobre o NoContext</h2>
		<p>NoContext é uma ferramenta de publicação pessoal ("bloggin") simples de usar (mas extremamente poderosa e personalizável), construída em software de <br>código aberto.</p>
		<p>Juntar-se ao site é gratuito se você for convidado por um amigo e muito barato de outra forma. Os usuários gratuitos podem atualizar suas contas para recursos extras.</p>
		<p>Você pode criar sua conta clicando <a href="cadastro.php" style="color: black;">aqui.</a></p>
	</main>
</body>
</html>