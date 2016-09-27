<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Iapen - Siapen</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
	<style>
		body{
			background-color: #efefef;
		}
		.header{
			width:100%;
			padding:2rem 0;
			margin-bottom: 2rem;
			background-color: #e67e22;
		}
		.headline,.subheadline{
			color:#fff;
		}
		.img-header{
			width:150px;
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
	</div>
	
	<div class="col-lg-4 col-lg-offset-4">
		<label for="">Data</label>
		<input type="text" class="form-control datepicker" placeholder="00/00/0000">
	
	</div><!--.container-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
	<script>
		/**
		 * Brazilian translation for bootstrap-datepicker
		 * Klaus Medeiros Nascimento <klausnascimento@gmail.com>
		 */
		;(function($){
			$.fn.datepicker.dates['pt-BR'] = {
				days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"],
				daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb", "Dom"],
				daysMin: ["Do", "Se", "Te", "Qu", "Qu", "Se", "Sa", "Do"],
				months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
				monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
				today: "Hoje",
				clear: "Limpar"
			};
		}(jQuery));
	</script>


	<script>

	</script>
</body>
</html>