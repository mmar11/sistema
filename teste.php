<?php
session_start();
include_once 'conexao.php';

if (isset($_POST['submit']) and !empty($_POST['login']) and !empty($_POST['senha1'])){

  $login = $_POST['login'];
  $senha = $_POST['senha1'];


  $sql = " SELECT * FROM cad_admin WHERE  login ='$login' ";

  $resultado = $conexao -> query($sql);

  $usuario = $resultado -> fetch_assoc();

if (password_verify($senha , $usuario['senha1'])){

$_SESSION['email'] = $usuario['email'];
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;

  header('Location:inicio.php');



}
else {
  header('Location:login.php');
};

}
else{
  header('Location:login.php');
}

?>