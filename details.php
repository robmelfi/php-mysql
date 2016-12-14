<html>

<body>

  <?php

    include 'db_connection.php';

    $id = $_GET["id"];

    $sql = "SELECT * FROM PERSONA WHERE ID=$id";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();


  ?>

  <form action="update.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $row["name"] ?>"><br>
    E-mail: <input type="text" name="email" value="<?php echo $row["email"] ?>"><br>
    <input type="hidden" name="id" value="<?php echo $row["ID"] ?>"><br>
    <input type="submit">
  </form>


</body>

</html>
