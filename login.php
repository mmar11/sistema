<?php

include_once 'conexao.php';

if (isset($_POST['submit'])){

$login = $_POST['login'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$senha1 =  $_POST['senha1'];
$senha2 =  $_POST['senha2'];
$senha3 = password_hash( $senha1 , PASSWORD_DEFAULT );

if($senha1 != $senha2 ) {

  //  echo "Senhas Divergentes";
  // "<script> document.getElementById </script>";
  
  }
else{

 

$sql = "INSERT INTO cad_admin ( login , email , tel , senha1 ) VALUES ('$login' ,'$email', '$tel' , '$senha3')";


$resultado = $conexao -> query($sql) ;
}
};  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEMA MXM ESCOLAR - Cadastro</title>.
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>SISTEMA MXM ESCOLAR</h1>

  <h2>Login no sistema</h2>

  <div id="msg">
  <span id="msgspan"></span>
  </div>

  <form action="teste.php" method="POST" class="menu" id="cadastroadm">
    
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <label for="password1">Senha</label>
    <input type="password" name="senha1" id="senha1">
    <button type="submit"  name="submit">LOGIN</button>
  </form>
  <div class="menu">
  <a class="voltar" href="index.php">VOLTAR</a>
  </div>


<script src="js.js"></script>
</body>
</html>