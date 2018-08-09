<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="./material.css">
	<script src="./material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<main>

		<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>

			<div class="mdl-cell mdl-cell--4-col dl-cell--4-col-tablet">

					<h2> Login </h2>
					<?php
						session_start();
						if(isset($_POST['Entrar'])){
							require 'conexao.php';
							$login = $_POST['login'];
							$senha = $_POST['senha'];
							
							$result = mysqli_query($conexao,'select * from usuario where login ="'.$login.'" and senha="'.$senha.'"');
							if(mysqli_num_rows($result)==1){
								$_SESSION['login'] = $login;
								
								header('Location: criarevento.php');
							}else
								echo '<center style="color: red">Conta inválida!</center>';
						}
						if(isset($_GET['logout'])){
							session_unregister('login');
						}
					?>

					<form method="post" class=" mdl-shadow--4dp centalizaForm">

						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="login" name="login">
						    <label class="mdl-textfield__label" for="sample3">E-mail:</label>
						  </div>
						  
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="Password" id="senha" name="senha">
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