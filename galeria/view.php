FOIII!!!

<?php 
include_once 'conexao.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>

  <div>
 
  <?php



$sql = "SELECT * FROM imagens";
$resultado = $conexao -> query($sql);

// $imag = fetch_assoc($resultado);


echo $imag[0];



?>

  </div>



  
</body>
</html>