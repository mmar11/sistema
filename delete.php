<?php
include_once "conexao.php"; 


if(!empty($_GET['id'])){

  $id = ($_GET['id']);

  $sql = "SELECT * FROM cad_alunos WHERE id=$id";
  $resultado = $conexao -> query($sql);

        if($resultado -> num_rows>0){
           $sqldelete = "DELETE FROM cad_alunos WHERE id=$id";
           $resultadodelete = $conexao -> query($sqldelete);
          }
        
}

header('Location: inicio.php');

?>