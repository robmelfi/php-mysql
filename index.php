<html>

<head>
  <style>
  table, th, td {
    border: 1px solid black;
  }
  </style>
</head>

<body>

  <form action="save.php" method="post">
    <input type="text" name="name" value="inserisci il nome"><br>
    <input type="text" name="email" value="inserisci l email"><br>
    <input type="submit">
  </form>

  <br>
  <br>

  <?php

    include 'db_connection.php';

    $sql = "SELECT * FROM PERSONA";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>
                <tr>
                  <td></td>
                  <td>Nome</td>
                  <td>e-mail</td>
                </tr>";
                $i=1;
                while($row = $result->fetch_assoc()) {
                  echo "
                        <tr>
                            <td>" . $i++ . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td> <a href=details.php?id=" . $row["ID"]  . ">Details</a> </td>
                            <td> <a class='button' href=delete.php?id=" . $row["ID"]  . ">delete</td>
                        </tr>
                        ";
                }
        echo "</table>";
    }
    $conn->close();
  ?>
</body>
</html>
