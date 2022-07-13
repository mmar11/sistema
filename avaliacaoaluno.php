<?php

include_once 'conexao.php';


if (isset($_GET['id'])){
 $idaluno = $_GET['id']; 

 $sql = "SELECT * FROM cad_alunos WHERE id =$idaluno ORDER BY id ASC";
 $retorno = $conexao -> query($sql) ;

 if ($retorno -> num_rows>0){


  while ($userData = mysqli_fetch_assoc($retorno)){
    
    
  $id = $userData['id'];  
  $nome = $userData['nome'];
  $datanasc = $userData['data_nasc'];
  $endereco = $userData['endereco'];
  $escolaridade = $userData['escolaridade'];
  $nivel = $userData['nivel'];
  $matricula = $userData['matricula'];
  $telefone = $userData['telefone'];
  $email = $userData['email'];
  $cpf = $userData['cpf'];
  
  };
  
  }

}




if (isset($_POST['submit'])){

$html = $_POST['html'];
$css = $_POST['css'];
$php = $_POST['php'];
$uxui = $_POST['uxui'];
$github = $_POST['github'];


 

$sql = "INSERT INTO linguagens ( html , css , php , uxui , github , id_alunos ) VALUES ('$html' , '$css' , '$php' , '$uxui' , '$github', '$id' )";


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
    <span><?php echo $nome ?></span>

    <label for="email">Email</label>
    <span><?php echo $email ?></span>
 
    <label for="matricula">Matricula</label>
    <span><?php echo $matricula ?></span>
 
 
    <label for="html">HTML</label>
    <input type="range" name="html" id="html" min="0" max="10" oninput="mostrarPorcentagem0(this.value)"><span id="exibePercent0">0</span>
    <label for="css">CSS</label>
    <input type="range" name="css" id="css"min="0" max="10" oninput="mostrarPorcentagem1(this.value)"><span id="exibePercent1">0</span>
    <label for="php">PHP</label>
    <input type="range" name="php" id="php"min="0" max="10" oninput="mostrarPorcentagem2(this.value)"><span id="exibePercent2">0</span>
    <label for="uxui">UXUI</label>
    <input type="range" name="uxui" id="uxui"min="0" max="10" oninput="mostrarPorcentagem3(this.value)"><span id="exibePercent3">0</span>
    <label for="github">GITHUB</label>
    <input type="range" name="github" id="github"min="0" max="10" oninput="mostrarPorcentagem4(this.value)"><span id="exibePercent4">0</span>
  

    
    
    
    <button type="submit"  name="submit">AVALIAR</button>  
  
  </form>

  <div class="menu">
  <a class="voltar" href="index.php">VOLTAR</a>
  </div>





<script>
function mostrarPorcentagem0(novoValor) {
  document.getElementById("exibePercent0").innerHTML = novoValor;
}
function mostrarPorcentagem1(novoValor) {
  document.getElementById("exibePercent1").innerHTML = novoValor;
}
function mostrarPorcentagem2(novoValor) {
  document.getElementById("exibePercent2").innerHTML = novoValor;
}
function mostrarPorcentagem3(novoValor) {
  document.getElementById("exibePercent3").innerHTML = novoValor;
}
function mostrarPorcentagem4(novoValor) {
  document.getElementById("exibePercent4").innerHTML = novoValor;
}
</script>
</body>
</html>
