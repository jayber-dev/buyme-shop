<?php
// TODO: finish the users models
// TODO: build the products db model

$usersTableModel = "
    CREATE TABLE users (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(100),
        fname VARCHAR(100),
        email VARCHAR(255),
        password VARCHAR(255)
    )
"

$loginsTableModel = "
    CREATE TABLE logins (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        password_salt VARCHAR(8),
        password_hash VARCHAR(255)
        realated_user_id int FOREIGN KEY REFERENCES users(id)
        )
"
?>