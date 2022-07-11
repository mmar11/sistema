<?php
include_once 'conexao.php';




if(!empty($_GET['id'])){
  
$busca = $_GET['id'];
$sql = "SELECT * FROM cad_alunos WHERE id =$busca ORDER BY id ASC";

}
else{
$sql = "SELECT * FROM cad_alunos ORDER BY nome ASC";


}
$retorno = $conexao -> query($sql);

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

 <?php
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
?>
  
  <form action="saveedit.php" method="POST" class="menu" id="cadastroadm" onSubmit="alert('Cadastro atualizado com sucesso!')">
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
    <label for="nasc">Data de Nascimento</label>
    <input type="date" name="nasc" id="nasc" value="<?php echo $datanasc ?>">
    <label for="end">Endereço</label>
    <input type="text" name="end" id="end" value="<?php echo $endereco ?>">
    <label for="esc">Escolaridade</label>
    <input type="text" name="esc" id="esc" value="<?php echo $escolaridade ?>">
    <label for="nivel">Nivel</label>
    <select name="nivel" id="nivel">
      <option value="">Selecione a escolaridade</option>
      <option value="fundamental" <?= ($nivel== 'fundamental') ? 'selected' : '' ?> >Fundamental</option>
      <option value="medio" <?= ($nivel== 'medio') ? 'selected' : '' ?> >Medio</option>
    </select>
    <label for="matr">Matricula</label>
    <input type="text" name="matr" id="matr" value="<?php echo $matricula ?>">
    <label for="tel">Telefone</label>
    <input type="tel" name="tel" id="tel" value="<?php echo $telefone ?>">
    <label for="E-mail">E-mail</label>
    <input type="email" name="email" id="email" value="<?php echo $email ?>">
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <button type="submit" id="update"  name="update">ALTERAR</button>  
</form>


  <div class="menu">
  <a class="voltar" href="index.php">VOLTAR</a>
  </div>
<a href="sair.php"  ><button id="sair">SAIR</button> </a>


<script src="js.js"></script>

</body>
</html>