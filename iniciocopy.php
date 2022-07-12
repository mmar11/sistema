<?php
session_start();
include_once 'conexao.php';

if(!isset( $_SESSION['login']) == true and !isset( $_SESSION['senha']) == true ){

  unset( $_SESSION['login']);
  unset( $_SESSION['senha']);
  header('Location:login.php');
}
else{
  $email = $_SESSION['email'];

}
//codigo de listagem de alunos


if(empty($_GET['search'])){

echo  $preencha = "Preencha a busca pelo cpf ou email";
// $sql = "SELECT * FROM cad_alunos ORDER BY nome ASC";

}
else{

$busca = $_GET['search'];
$sql = "SELECT * FROM cad_alunos WHERE nome LIKE '%$busca%' ORDER BY nome ASC";
$retorno = $conexao -> query($sql);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEMA MXM ESCOLAR</title>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
<link rel="stylesheet" href="style.css">

<style>
body {
  background-color: lightgray;
  color: black;

}

</style>
  </head>
<body>
  <div id="fundo">
  <div class="">
  <h1>SISTEMA MXM ESCOLAR</h1>

  <h2>Bem vindo NOME</h2>

  </div>

<div class="busca">
  
  <input type="search" id="pesquisar">
  <button type="button" class="btn btn-secondary btn-lg" onclick="buscarDados()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>

</div>



  <div class="menu">
<span>Bem vindo <?php echo $email ?> </span>

<table class="table text-white table-bg">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">Data Nas</th>
    <th scope="col">Endereço</th>
    <th scope="col">Escolaridade</th>
    <th scope="col">Nivel</th>
    <th scope="col">Matricula</th>
    <th scope="col">Telefone</th>
    <th scope="col">Email</th>
    <th scope="col">CPF</th>
  </tr>
</thead>


<tbody>






<?php 


if(empty($_GET['search'])){
  echo  $preencha = "Preencha a busca pelo cpf ou email";
}else{





  
while ($userData = mysqli_fetch_assoc($retorno)){
  
  echo "<tr>";
  echo "<td>".$userData['id']."</td>";
  echo "<td>".$userData['nome']."</td>";
  echo "<td>".$userData['data_nasc']."</td>";
  echo "<td>".$userData['endereco']."</td>";
  echo "<td>".$userData['escolaridade']."</td>";
  echo "<td>".$userData['nivel']."</td>";
  echo "<td>".$userData['matricula']."</td>";
  echo "<td>".$userData['telefone']."</td>";
  echo "<td>".$userData['email']."</td>";
  echo "<td>".$userData['cpf']."</td>";
  echo "<td> <a href ='editar.php?id=$userData[id]'><img src='img/pencil.svg'></a></td>";
  echo "<td> <a href ='delete.php?id=$userData[id]'><img src='img/trash.svg' onclick = 'delete()' ></a></td>";
  echo "<td> <a href ='avaliacaoaluno.php?id=$userData[id]'><img src='' onclick = 'delete()' ></a></td>";
  
  echo "</tr>";

}


};




?>
</div>
</tbody>

</table>





<a href="sair.php"  ><button id="sair">SAIR</button> </a>

  </div>

<script src="js.js"></script>

</body>
</html>