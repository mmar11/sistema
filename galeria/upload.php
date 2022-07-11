<?php
include_once 'conexao.php';

if (isset($_POST['submit']) and isset($_FILES['file'])){

 

$name = $_FILES['file']['name'];
$full_path = $_FILES['file']['full_path'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$size = $_FILES['file']['size'];

if($error === 0 ){
if($size >= 5000000 ){

  $em = "Arquivo maior do que 5 MB";
  header("location:index.php?error=$em");


}else {
  $img_ex  = pathinfo($name ,  PATHINFO_EXTENSION);
  $img_ex_min = strtolower($img_ex);
  $allow_exe =  array("jpg" , "gif" , "png" , "jpeg");


  if (in_array($img_ex_min , $allow_exe)){

    $newUniqId = uniqid("img-").'.'.$img_ex_min;
    $img_upload_path = 'uploads/'.$newUniqId;
    move_uploaded_file($tmp_name , $img_upload_path);

    //guardar o local do arquivo no banco

    $sql = "INSERT INTO imagens (image_url) VALUES ('$newUniqId')";

    $resultado = $conexao -> query($sql);

    header("Location:view.php");


  }else {
    $em = "Tipo de arquivo não permitido";
    header("location:index.php?error=$em");

  }


}

}else{
  $em = "Erro desconhecido!!";
  header("location:index.php?error=$em");
}

}

else{
  header('Location:index.php');
}

?>

