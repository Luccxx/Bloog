<?php 
include('protect.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - <?php echo $_SESSION['name_user']; ?></title>
	<link rel="website icon" type="png" href="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0">
	<link rel="stylesheet" href="estilo-media-query.css">
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
		
	</style>
	<main class="titulo">
		<div class="titulo">
		<a href="home.php"><img src="https://th.bing.com/th/id/R.da36e8e881cd617e1585700e530b4c61?rik=S897BlSXbFrCtg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_16289.png&ehk=OzC68a%2brebEfpKkmw7kf%2frenR5aITmh%2bpqlIbNvT80E%3d&risl=&pid=ImgRaw&r=0" width="50" height="50"></a> 

		</div>
		<div class="text">
			N o C O N T E X T
		</div>
		<div class="user" style="text-align: right;">
			@<?php echo $_SESSION['name_user']; ?>
		</div>
		<div class="login" style="text-align: right;">
			<a href="logout.php" style="color: white;">[Sair]</a>
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
		<h1>Publicar em <?php echo $_SESSION['name_user']; ?></h1>
	</div>
	<form action="enviado.php" method="Post">
		<div class="input">
			<button name="enviar" >Publicar</button>
		</div>
		<div class="escrever">

			<textarea rows="10" cols="100" name="texto" id="textarea" style="font-size: 20px;"></textarea>
		</div>
	</form>
	<div class="see_post">
		<button name="sell" title="Ver Publicações" ><a href="arquivados.php">Publicações</a></button>
	</div>
	<div class="I">
		<button name="I" title="Quebra de Linha" id= "textarea" onclick="I()">Q</button>
	</div>
	<div class="B">
		<button name="B" title="Negrito" onclick="B()">B</button>
	</div>
	<div class="L">
		<button name="L" title="Limpar" onclick="Limpar()">L</button>
	</div>
</body>
<script>
	function I() {
  
  
	  // Obtém o conteúdo atual do textarea
	  var textarea = document.getElementById("textarea");
	  var content = textarea.value;

	  // Adiciona a data e hora atuais ao conteúdo do textarea entre as tags <b></b>
	  content += "<br>";

	  // Atualiza o conteúdo do textarea com o novo conteúdo
	  textarea.value = content;
}

	function B() {
	  var textarea = document.getElementById("textarea");
	  var content = textarea.value;

	  // Obtém a data e hora atuais
	  var date = new Date();

	  // Formata a data e hora atuais
	  var dateString = date.toLocaleDateString() + " " + date.toLocaleTimeString();

	  // Adiciona a data e hora atuais ao conteúdo do textarea entre as tags <b></b>
	  content += "<b>" + dateString + "</b> - ";

	  // Atualiza o conteúdo do textarea com o novo conteúdo
	  textarea.value = content;


}

function Limpar() {
  // Obtém o elemento textarea pelo seu ID
  const textarea = document.getElementById('textarea');

  // Limpa o conteúdo do textarea
  textarea.value = '';
}

</script>

</html>