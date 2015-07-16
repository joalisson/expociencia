<?php include("config.php"); 
session_start();

if($_SESSION['UsuarioID'] == ''){
    header('location: http://www.cav-ba.com.br/expociencia/avaliacao/login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administração - Expociência</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/dashboard.css" rel="stylesheet">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script type="text/javascript" src="js/bib.js"></script>
	<script type="text/javascript">
		window.history.go(1);
	</script>
</head>

<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Expociência</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="">Usuário: <b><?php echo $_SESSION['UsuarioNome']; ?></b></a></li>
						<li><a href="#" id="suporte">Suporte</a></li>
						<li><a href="logout.php">Sair</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- BARRA LATERAL  -->
	<nav>
		<div class="container-fluid">
			<div class="row">
				<div class="teste">
					<div class="col-sm-3 col-md-2 sidebar">
						<ul class="nav nav-sidebar">
							<li><a href="#" id="todos"><span class="glyphicon glyphicon-list"></span> Todos os<b> PROJETOS</b></a></li>
							<li><a href="#" id="abertos"><span class="glyphicon glyphicon-folder-open"></span>  Projetos para<b> AVALIAR</b></a></li>
							<li><a href="#" id="indeferido"><span class="glyphicon glyphicon-remove"></span> Projetos <b>INDEFERIDOS</b></a></li>
							<li><a href="#" id="deferido"><span class="glyphicon glyphicon-ok"></span> Projetos <b>DEFERIDOS</b></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- FINAL BARRA LATERAL  -->
	<section>
		<!-- MODAL  -->
		<div class="bs-example">
			<div id="myModal" class="modal fade">

			</div>		
		</div>
		<div class="bs-example">
			<div id="myModal2" class="modal fade">

			</div>		
		</div>
		<!-- FINAL MODAL  -->

		<!-- MODAL ALERT MESSAGE  -->
		<div id="myModal3" class="modal fade">
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="Close">
					&times;
				</a>
				<strong>Sucesso!</strong> Sua mensagem foi enviada</div>
			</div>
		</div>
		<!-- FINAL ALERT MESSAGE  -->

		<!-- TABELA PRINCIPAL  -->
		<div class="col-sm-9 col-md-10 col-md-offset-2 main">
			<div class="span7">
				<div class="widget stacked widget-table action-table">

					<!-- LISTAGEM DOS PROJETOS -->
					<div id="content">
						<img src="images/Banner.jpg">

					</div>
					<!-- FINAL LISTAGEM PROJETOS -->
				</div>
			</div>
		</div>
		<!-- FINAL TABELA PRINCIPAL -->
	</section>
	<footer>
		
	</footer>
</body>
</html>