<?php

include_once 'conexao.php';

if (isset($_POST['submit'])){

$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$end = $_POST['end'];
$esc =  $_POST['esc'];
$nivel =  $_POST['nivel'];
$matr =  $_POST['matr'];
$tel =  $_POST['tel'];
$email =  $_POST['email'];
$cpf =  $_POST['cpf'];


 

$sql = "INSERT INTO cad_alunos ( nome , data_nasc , endereco , escolaridade , nivel , matricula , telefone , email , cpf ) VALUES ('$nome' , '$nasc' , '$end' , '$esc' ,  '$nivel' , '$matr' , '$tel' ,  '$email', '$cpf' )";


$resultado = $conexao -> query($sql) ;

};  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEMA MXM ESCOLAR - Cadastro</title>.
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
  <h1>SISTEMA MXM ESCOLAR</h1>

  <h2>Curso Full Stack</h2>

 

  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="menu" id="cadastroadm" onSubmit="alert('Cadastro efetuado com sucesso!')">
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="nasc">Data de Nascimento</label>
    <input type="date" name="nasc" id="nasc">
    <label for="end">Endereço</label>
    <input type="text" name="end" id="end">
    <label for="esc">Escolaridade</label>
    <input type="text" name="esc" id="esc">
    <label for="nivel">Nivel</label>
    <select name="nivel" id="nivel">
      <option value="">Selecione a escolaridade</option>
      <option value="fundamental">Fundamental</option>
      <option value="medio">Medio</option>
    </select>
    <label for="matr">Matricula</label>
    <input type="text" name="matr" id="matr">
    <label for="tel">Telefone</label>
    <input type="tel" name="tel" id="tel">
    <label for="E-mail">E-mail</label>
    <input type="email" name="email" id="email">
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf">
    <button type="submit"  name="submit">CADASTRAR</button>  
  
  </form>

  <div class="menu">
  <a class="voltar" href="index.php">VOLTAR</a>
  </div>


  <?php 



  ?>


<!-- <script src="js.js"></script> -->
</body>
</html>
