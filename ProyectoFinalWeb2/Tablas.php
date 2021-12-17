<?php
          $conexion=mysqli_connect("localhost","root","","ProyectoFinalWebII");

?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="estilosTabla.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body >
          
<center><h1>Datos de la tabla albums </h1></center>
                    <table class="table table-dark" >
                    <thead >
                    <tr>
                              <td class="header" scope="col" >ID</td>
                              <td class="header" scope="col">NAME</td>
                              <td class="header" scope="col">AUTHOR</td>
                              <td class="header" scope="col">genre_id</td>
                    </tr>
                    </thead>
                    <tr>
                              <?php
                              $sql="SELECT * from albums LIMIT 5";
                              $result=mysqli_query($conexion,$sql);

                              while($mostrar=mysqli_fetch_array($result)){
                              ?>
                              <td><?php echo $mostrar['id']?></td>
                              <td><?php echo $mostrar['name']?></td>
                              <td><?php echo $mostrar['author']?></td>
                              <td><?php echo $mostrar['genre_id']?></td>
                    </tr>
                    <?php
                              }
                    ?>
                    </table>

                    <hr>
                    <hr>
<div><center><h1>Datos de la tabla genres</h1></center></div>
                    <table  class="table table-dark">
                    <tr>
                              <td class="header" scope="col">ID</td>
                              <td class="header" scope="col">NAME</td>
                              
                    </tr>
                    <tr>
                              <?php
                              $sql="SELECT * from genres  LIMIT 5";
                              $result=mysqli_query($conexion,$sql);

                              while($mostrar=mysqli_fetch_array($result)){
                              ?>
                              <td><?php echo $mostrar['id']?></td>
                              <td><?php echo $mostrar['name']?></td>
                             
                    </tr>
                    <?php
                              }
                    ?>
                    
                    </table>
                    
          
</body>
</html>