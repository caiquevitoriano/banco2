<!DOCTYPE html>
<html>
<head>
  <title>cadastro</title>
</head>
<body>
  <?php
  require 'conexao.php';
  $nome = $_POST['nome'];
  $curso = $_POST['curso'];
  $instituicao = $_POST['instituicao'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuario WHERE login = '$login'";
   
    if($login == "" || $login == null){
      echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
   
      }else{
        if(mysqli_num_rows($conexao, $sql)==0){
           $query = ("INSERT INTO usuario (nome,curso,instituicao,login,senha) VALUES ('$nome','$curso','$instituicao','$login','$senha')");
          $insert = mysqli_query($conexao,$query);
           
          if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
          }
        }
        else{
          echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
          die();
          }
      }
  ?>

</body>
</html>
