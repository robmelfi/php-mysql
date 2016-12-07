<?php
  include 'db_connection.php';

  $name = $_POST["name"];
  $email = $_POST["email"];

  $sql = "INSERT INTO PERSONA (name, email) VALUES ('$name', '$email')";

  if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close;
  header('Location: index.php');
?>
