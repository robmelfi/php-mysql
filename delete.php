<?php
  include 'db_connection.php';

  $id = $_GET["id"];

  $sql = "DELETE FROM PERSONA WHERE ID = $id";

  if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close;
  header('Location: index.php');
?>
