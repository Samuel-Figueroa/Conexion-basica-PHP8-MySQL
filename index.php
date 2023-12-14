<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión PHP a MySQL</title>
</head>
<body>
    <?php
    require 'conexion.php';
    $conn = Cconexion::ConexionDB();
        
    // prepare query
        $statement = $conn->prepare("SELECT * FROM users");
        $statement->execute();
        
    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
        
        while ($row = $statement->fetch()){
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['password'] ?></td>
    </tr>
    <?php

        }
    ?>
  </tbody>
</table>
</body>
</html>