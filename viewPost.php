<?php 
include('protect.php');
?>
<?php 


include("conexao.php");

$consulta = "SELECT * FROM usuario ORDER BY id DESC LIMIT 1";	
$con = $link->query($consulta) or die($link->error);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View my Post!</title>
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
			right: 15px;
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
			font-size: 30px;
			text-align: center;	
		}
		.data-a{
			position: absolute;
			top: 125px;
			right: 30px;
			border-radius: 5px;
			font-size: 20px;
		}

		.info{
			padding-top: 25px;
			padding-right: 30px;
			padding-left: 30px;
			height: auto;
			width: 110;
			text-align: justify;
			padding-block-end: 1rem;
		}
		.butao_see{
			position: absolute;
			text-align: right;
			top: 157px;
			right: 33px;
			border-radius: 5px;
			font-size: 20px;
		}
		.butao_delete{
			position: absolute;
			text-align: right;
			top: 157px;
			right: 130px;
			border-radius: 5px;
			font-size: 20px;
		}
		.newpost{
			position: absolute;
			top: 148px;
			text-align: right;
			right: 260px;
		}
		.user{
			position: relative;
			top: -29px;
			right: 95px;
			font-size: 18px;
			color: white;
		}
		.update{
			position: absolute;
			top: 148px;
			text-align: right;
			right: 198px;
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
				<a href="painelLogin.php" style="color: white;">[Log Out]</a>
		</div>

	</main>
	
	<main class="container">
		<form>
			<tr>
				<td>
					<a href="home.php" style="color: white;">Welcome</a>
					<a href="" style="color: white;">Search</a>
					<a href="" style="color: white;">Help</a>
					<a href="" style="color: white;">About</a>
				</td>
				
			</tr>
			
		</form>
	</main>

	<div class="view">
			<?php while ($dado = $con->fetch_array()){ ?>
			<br><div class="data-a">
				Data -
				<?php echo date('Y-m-d', strtotime(($dado["dt_hr"]))); ?>
			</div>
			<div class="newpost">
				<button><a href="home.php" style="color: black;">Nova Publicação</a></button>
			</div>
			<div class="update">
				<button><a href="edit.php?p=edit&id=<?php echo $dado['id']; ?>" style="color: blue;">Editar</a></button>
			</div>
			<div class="butao_see">
				<button><a href="arquivados.php" style="color: green;">Publicações</a></button>
				
			</div>
			<div class="butao_delete">
				<button><a href="delete_view.php?p=deletar&id=<?php echo $dado['id']; ?>"  style="color: red;">Deletar</a></button>
			</div>
			<br>
			<div class="info">
				<?php echo $dado["info"]; ?>
				<br>
			</div>
			
			<?php } ?>
		
	</div>
</body>
</html>