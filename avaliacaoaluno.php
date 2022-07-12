<?php

include_once 'conexao.php';

$idaluno = $_GET['id'];

if (isset($_POST['submit'])){

$html = $_POST['html'];
$css = $_POST['css'];
$php = $_POST['php'];
$uxui = $_POST['uxui'];
$github = $_POST['github'];


 

$sql = "INSERT INTO linguagens ( html , css , php , uxui , github , id_aluno ) VALUES ('$html' , '$css' , '$uxui' )";


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

  <h2>Auto avaliação conteúdos</h2>

 

  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="menu" id="aval" onSubmit="alert('Avaliação efetuada com sucesso!')">
    
    <label for="nome">Nome</label>
    <span>INERIR Nome</span>

    <label for="email">Email</label>
    <span>INERIR EMAIL</span>
 
 
 
    <label for="html">HTML</label>
    <input type="range" name="html" id="html" min="0" max="10">
    <label for="css">CSS</label>
    <input type="range" name="css" id="css"min="0" max="10">
    <label for="php">PHP</label>
    <input type="range" name="php" id="php"min="0" max="10">
    <label for="uxui">UXUI</label>
    <input type="range" name="uxui" id="uxui"min="0" max="10">
    <label for="github">GITHUB</label>
    <input type="range" name="github" id="github"min="0" max="10">
  

    
    
    
    <button type="submit"  name="submit">AVALIAR</button>  
  
  </form>

  <div class="menu">
  <a class="voltar" href="index.php">VOLTAR</a>
  </div>





<script src="js.js"></script>
</body>
</html>
