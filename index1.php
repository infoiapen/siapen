<?php
session_start();

if(isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'SIM'):
	header("Location: home.php");
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Iapen - Siapen</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<style type="text/css">
		<style>
			body{
				background-color: #efefef;
			}
			.header{
				width:100%;
				padding:2rem 0;
				margin-bottom: 2rem;
				background-color: #337ab7;
			}
			.headline,.subheadline{
				color:#fff;
			}
			.img-header{
				width:100px;
				margin-top: 3rem;
			}
			form{
				background-color: #fff;
				padding:1.5rem;
			}
			
		</style>
	</head>
	<body>

		<div class="header">
			<h1 class="text-center headline">Instituto de Administração Penitenciária do Amapá</h1>
			<h2 class="text-center subheadline">Sistema Administrativo Penitenciário - Siapen</h2>
			<img src='image/logo_pricipal.png' class="img-responsive center-block img-header" alt="">
		</div>
		
		<div class="col-lg-4 col-lg-offset-4">
			<form action="#">
				
				<div class="form-group has-feedback">
					<label for="name">Nome</label>
					<input type="text" id="name" class="form-control" placeholder="Nome completo" required="true">
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="exemplo@domain.com" required="true">
				</div>
				
				<div class="row">
					<div class="form-group col-lg-6">
						<label for="senha">Senha</label>
						<input type="password" id="senha" class="form-control" placeholder="******" required="true">
					</div>

					<div class="form-group col-lg-6">
						<label for="resenha">Repetir senha</label>
						<input type="password" id="resenha" class="form-control" data-match="#senha" placeholder="******" required="true">
					</div>
				</div>

				<div class="form-group">

				<!--
					Botão de enviar desabilitado 
					<button class="btn btn-primary">Enviar</button> -->
					
					<a href="sistema/index.php" class="btn btn-primary" role="button">Enviar</a>
				</div>

			</form>
		</div><!--.container-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

		<script>
			

		</script>

	</body>
	</html>