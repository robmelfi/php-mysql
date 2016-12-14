<?php
  include 'db_connection.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $id = $_POST["id"];

  $sql = "UPDATE PERSONA SET
          name='$name',
          email='$email'
          WHERE id=$id";



  if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close;
  header('Location: index.php');

?>
