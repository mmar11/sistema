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



<div class="box">
  <form action="upload.php" method="POST" enctype="multipart/form-data" >

    <input type="file" name="file" id="file">
    <input type="submit" name="submit" id="submit" value="ENVIAR FOTO">



  </form>

  <h2> 
    <?php 

    if(isset($_GET['error'])){
    $saida = $_GET['error'];

    echo $saida;

    }


    ?>
  </h2>


</div>


  
</body>
</html>