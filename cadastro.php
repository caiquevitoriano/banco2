<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>

	<link rel="stylesheet" href="./material.css">
	<script src="./material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<main>

		<div class="mdl-grid Cadastro">

			<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>

			<div class="mdl-cell mdl-cell--4-col dl-cell--4-col-tablet">

						<h2> Cadastro </h2>	

						<form method="POST" action="verificarCadastro.php" class="mdl-shadow--4dp centalizaForm">
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="login" name="login">
						    <label class="mdl-textfield__label" for="sample3">E-mail:</label>
						  </div>

						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="nome" name="nome">
						    <label class="mdl-textfield__label" for="sample3">Nome:</label>
						  </div>

						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="curso" name="curso">
						    <label class="mdl-textfield__label" for="sample3">Curso:</label>
						  </div>

						   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="instituicao" name="instituicao" >
						    <label class="mdl-textfield__label" for="sample3">Instituição:</label>
						  </div>
						  
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="Password" id="senha" name="senha" >
						    <label class="mdl-textfield__label" for="sample3">Senha:</label>
						  </div>

						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="Password" id="repetirSenha" name="repetirSenha">
						    <label class="mdl-textfield__label" for="sample3">Repetir senha:</label>
						  </div>
						  <br>
                          <input type="submit" value="Cadastrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"/>
						  

						</form>	
			</div>

			<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>

		</div>
		

	</main>

</body>
</html>