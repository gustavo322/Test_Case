﻿
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>

	<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header("Location: /TestCase");
  }
 
$logado = $_SESSION['login'];
?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Tela Inicial</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">								
								<li><a href="/TestCase/Home/ConsultaSaldo.php"  class="gn-icon gn-icon-download">Consultar Saldo</a></li>
								<li><a href="/TestCase/Home/Saque.php" class="gn-icon gn-icon-cog">Saque</a></li>
								<li><a href="/TestCase/Home/Deposito.php" class="gn-icon gn-icon-cog">Depósito</a></li>
								<li><a class="gn-icon gn-icon-help">Transfêrencia</a></li>
								<li><a class="gn-icon gn-icon-archive">Consultar Extrato</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="/TestCase/Home/">	Bem Vindo  <?php echo $_SESSION['login'] ?></a></li>
				

				
				<li><a href="/TestCase">Sair </a></li>
				
				
			</ul>
			<header>
				
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
