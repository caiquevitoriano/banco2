<?php 
	include_once("config.php");
	include_once("conexao.php");
	include_once("functions.php");

	$nome = $_POST['nome'];
	$curso = $_POST['curso'];
	$instituicao = $_POST['instituicao'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	

	$sql = DBQuery("usuario", "WHERE login = '$login'");


	if(!$sql){

		$cadastrar = DBInsert("usuario","(nome,curso,instituicao,login,senha)","('$nome','$curso','$instituicao','$login','$senha')"); 


		 if($cadastrar){
			 echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
			 header("Location: login.php");
		}else{
			 echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
			 
		}
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
		
          die();
	}

?>