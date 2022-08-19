<?php
// TODO: querying methods
// TODO: test check connection to db
// TODO:check return dummy data

// DB querys related file
class Database_handler {
  function __construct() {
    echo "wow"; 
    $servername = "localhost";
    $username = "root";
    $password = "";
  }

  

  function connect($servername, $username, $password) {
  $conn = new mysqli($this->$servername,$this->$username, $this->$password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  
  }
};

?>