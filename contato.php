<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GoldenData - Serviços</title>
	<link rel="icon" href="img/favicon.png" />
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/mediaqueries.css">
	<link rel="stylesheet" href="css/fontello.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style>	
	form input, textarea{
		padding: 9px;
		width: 100%;
		border-radius: 4px;
		border: 1px solid #999;
		font-family: sans-serif;
		}
	form{
		margin: 0 auto;
		}
	form button{
		background: #f27109;
		padding: 15px;
		border: none;
		border-radius: 5px;
		width: 100%;
		display: block;
		color: #ffffff;
		margin: 0 auto;

		}

	.modal:target .modal-container{
		top: 5%;
		transform:  translate(-50%, 0%);
		-webkit-transform: translate(-50%, 0%);
		-ms-transform: translate(-50%, 0%);
		}
	label.error{
		color: red; font-weight: bold; padding: 5px´;
		}
</style>

</head>
<body>
<?php include_once("analyticstracking.php") ?>
	<header>
		<div class="conteudo">
			<div class="logo">
			<a href="index.html">
				<img src="img/logo/logo.png" alt="GoldenData">
			</a>
			</div><!--logo-->

			<!--botao menu-->
			<input id="menu-bar" type="checkbox">
			<label class="icon-menu" for="menu-bar"></label>
			<!--end do botao menu-->
			<nav class="menu">
				<a href="index.html#quemsomos">Quem Somos</a>
				<a href="servicos.html">Soluções</a>
				<a href="contato.php">Contato</a>
			</nav>
		</div><!--conteudo-->
	</header>

	<main>
		<section id="banner">
			<img src="img/banners/servicos.jpg" alt="soluções goldendata">
			<div class="conteudo">
				<h1>Entre em contato conosco</h1>
				<p>Consultoria e Soluções em Bancos de Dados, Business Intelligence e Big Data</p>
			</div><!--conteudo-->
		</section>

		<section id="solution_lista">
			<div class="conteudo">
				<div class="formulariodecontato">					
					
					<p style="margin:25px 0;">Preencha os dados e fale com a gente.</p>
					<p style="margin:25px 0;" class="icon-phone">+55 11 98899-6498</p>
					<p style="margin:25px 0;" class="icon-mail"><a href="mailto:danielsantana_br@yahoo.com.br?subject=Contato do site" style="text-decoration:none; color:#333333;">goldendata@goldendata.com.br</a></p>
					<div id="div1"></div>
					
					<form id="simples-formulario-ajax">
						<input type="text" id="nome" name="nome" placeholder="Seu nome" required><br><br>
						<input type="email" id="email" name="email" placeholder="seuemail@email.com" required><br><br>
						<input type="text" id="telefone" name="telefone" placeholder="(11) 99999-9999" maxlength="15" required ><br><br>
						<input type="text" id="empresa" name="empresa" placeholder="Nome da empresa" required><br><br>
						<textarea name="mensagem" id="mensagem" cols="25" rows="7" placeholder="Escreva aqui"></textarea><br><br>
	
						<button type="submit">Enviar</button>
						<input type="hidden" id="metodo" value="formulario-ajax">
					</form>
					<script type="text/javascript">
					/* Máscaras ER */
					function mascara(o,f){
					    v_obj=o
					    v_fun=f
					    setTimeout("execmascara()",1)
					}
					function execmascara(){
					    v_obj.value=v_fun(v_obj.value)
					}
					function mtel(v){
					    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
					    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
					    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
					    return v;
					}
					function id( el ){
					    return document.getElementById( el );
					}
					window.onload = function(){
					    id('telefone').onkeypress = function(){
					        mascara( this, mtel );
					    }
					}
					</script>
				</div><!--formulariocontato-->
			</div><!--conteudo-->
		</section>
	</main>

<footer id="rodape">
		<div class="conteudo">
		<img src="img/logo/logo_mini.png" alt="GoldenData">
			<p>&copy 2017 Copyright - Todos os direitos reservados - <strong>GoldenData</strong> Brasil - São Paulo/SP - CNPJ: 26.266.377/0001­80 - Consultoria e Soluções em Bancos de Dados, Business Intelligence e Big Data | 2017 <br> <br>
			Decisões Inteligentes começam por uma análise de dados.
			<br><br> </p>
		</div><!--conteudo-->
</footer>
	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="formulario.js" ></script>

</body>
</html>