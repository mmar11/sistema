
<?php

include_once 'conexao.php';

if (isset($_POST['update'])){

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $nasc = $_POST['nasc'];
  $end = $_POST['end'];
  $esc =  $_POST['esc'];
  $nivel =  $_POST['nivel'];
  $matr =  $_POST['matr'];
  $tel =  $_POST['tel'];
  $email =  $_POST['email'];
  $cpf =  $_POST['cpf'];
  
  
 
  $sql = "UPDATE cad_alunos SET nome='$nome' , data_nasc='$nasc' , endereco='$end' , escolaridade='$esc' , nivel='$nivel' , matricula='$matr' , telefone='$tel' , email='$email' , cpf='$cpf'  WHERE  id='$id' ";
  
  
  $resultado = $conexao -> query($sql) ;

  header('Location:inicio.php');
  
  };  




?>
