
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se</title>
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
			height: 95px;
			width: auto;

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
			position: absolute;
			left: 100px;
		}
		

		.button button{
			font-weight: bold;
			height: 20px;
			width: 25px;
			border: 0px;
			background: #C0C0C0;
			margin-right: 10px;
		}

		.input input{
			font-weight: bold;
			height: 20px;
			width: 70px;
			background: #C0C0C0;
			border: 0px;
		}

		.input{
			position: absolute;
			right: 150px;
			top: 180px;

		}
		.escrever{
			position: absolute;
			right: 150px;
			top: 220px;
			height: 200px;
			min-width: 1100px;

		}
		.input button{
			font-weight: bold;
			height: 25px;
			width: 70px;
			background: #C0C0C0;
			border: 0px;
		}
		.user{
			position: relative;
			top: -29px;
			right: 70px;
			font-size: 18px;
			color: white;

		}
		.see_post button{
			position: absolute;
			right: 150px;
			top: 470px;
			font-weight: bold;
			border: none;
			background: #C0C0C0;
			height: 30px;
			width: 105px;
		}
		.I button{
			position: absolute;
			left: 115px;
			top: 190px;
			font-weight: bold;
			height: 20px;
			width: 25px;
			background: #C0C0C0;
			border: 0px;
		}
		.B button{
			position: absolute;
			left: 165px;
			top: 190px;
			font-weight: bold;
			height: 20px;
			width: 25px;
			background: #C0C0C0;
			border: 0px;
		}
		.L button{
			position: absolute;
			left: 215px;
			top: 190px;
			font-weight: bold;
			height: 20px;
			width: 25px;
			background: #C0C0C0;
			border: 0px;
		}
		.user{
			color: black;
			position: absolute;
			top: 280px;
			left: -60px;
			font-size: 20px;
		}
		.login{
			color: black;
			position: absolute;
			top: 360px;
			left: -18px;
			font-size: 20px;
		}
		.senha{
			color: black;
			position: relative;
			top: 175px;
			left: -19px;
			font-size: 20px;
		}
		.enviar{
			color: black;
			position: relative;
			top: 200px;
			left: -0px;
		}
		.user input{
			height: 35px;
			width: 280px;
			font-size: 25px;

		}
		.login input{
			height: 35px;
			width: 280px;
			font-size: 25px;
		}
		.senha input{
			height: 35px;
			width: 280px;
			font-size: 25px;
		}
		.enviar button{
			font-weight: bold;
			background: #C0C0C0;
			border: 0px;
			height: 25px;
			width: 95px;
		}
		.Cadastre-se{
			text-align: center;
			font-size: 30px;
		}
	</style>
	<main class="titulo">
		<div class="titulo">
		<a href="home.php"><img src="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0" width="50" height="50"></a> 

		</div>
		<div class="text">
			N o C O N T E X T
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
	<div class="Cadastre-se">
		<h1>Cadastre-se</h1>
	</div>
	<main class="info">
		<center>
		<form action="cadastrados.php" method="POST">
			<div class="user">
				Nome de Usuário:
				<input type="text" name="user">
			</div>
			<div class="login">
				E-mail:
				<input type="email" name="login">
			</div>
			<div class="senha">
				Senha: 
				<input type="password" name="senha">
			</div>
			<div class="enviar">
				<button name="Enviar">Enviar</button>
			</div>
		</form>
		</center>
	</main>
</body>
</html>