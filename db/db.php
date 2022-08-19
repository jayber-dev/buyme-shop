<?php
// TODO: querying methods
// TODO: test check connection to db
// TODO:check return dummy data

  $servername = "localhost";
  $username = "root";
  $password = ""; 

// DB querys related file
class Database_handler {
  function __construct($servername,$username,$password) {
    echo "wow"; 
    
  }

  

  function connect($servername, $username, $password) {
  $conn = new mysqli($this->$servername,$this->$username, $this->$password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  
  }
};

$conn = new Database_handler($servername,$username,$password);
$conn->connect($servername,$username,$password)

?>

<!-- INSERTING NEW REGISTERY OF USER WITH DETAILS QUERY
  INSERT INTO users (first_name,last_name,phone_number) VALUES ('jay','ber','0526767682');
  INSERT INTO logins (user_id, password_salt, password_hash) VALUES ((SELECT id FROM users WHERE first_name = 'jay'), 'horse', '123456789');
 -->