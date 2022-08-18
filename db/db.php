<?php
// TODO: querying methods
// TODO: test check connection to db
// TODO:check return dummy data

// DB querys related file
class Database_handler {
  
  $servername = "localhost";
  $username = "root";
  $password = "";


  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  public function getuser($email) {

  }

  public function getProducts($productId,$productCategory) {

  }
}

?>