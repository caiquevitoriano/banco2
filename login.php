<?php
	session_start();
	if(isset($_SESSION['Logado'])){
		header("location: criarevento.php");
		die();
	}

	include_once("config.php");
	include_once("conexao.php");
	include_once("functions.php");

	if(isset($_POST['Entrar'])){
		$conn = DBConnect();
		$login = mysqli_escape_string($conn,$_POST['login']);
		$senha = mysqli_escape_string($conn,$_POST['senha']);

		$test = DBQuery("usuario", "WHERE login = '$login' AND senha = '$senha'");
		
		if($test){
			$_SESSION['Logado'] = true;
			header("location: criarevento.php");
		}else{
			echo "<script>alert('Não encontrado')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="./css/material.css">
	<script src="./js/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<main>

		<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>

			<div class="mdl-cell mdl-cell--4-col dl-cell--4-col-tablet">

					<h2> Login </h2>
				
					<form method="post" class=" mdl-shadow--4dp centalizaForm">

						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="login" name="login"required />
						    <label class="mdl-textfield__label" for="sample3">E-mail:</label>
						  </div>
						  
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="Password" id="senha" name="senha" required/>
						    <label class="mdl-textfield__label" for="sample3">Senha:</label>
						  </div>

						  <p> Não possui conta? <a href="cadastro.php">Criar conta</a></p>				
					

						 <input type="submit" value="Entrar" name="Entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"/>

					</form>

			</div>

			<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>

		</div>
	</main>	
</body>
</html>