<?php
// TODO: finish the users models
// TODO: build the products db model


// users managment models

    $usersTableModel = "
        CREATE TABLE users (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(100),
            last_name VARCHAR(100),
            phone_number VARCHAR(30)
            created_at DATETIME ,
        );
    ";

    // passwords stored in a different table 

    $loginsTableModel = "
        CREATE TABLE logins (
            Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            password_salt VARCHAR(8),
            password_hash VARCHAR(255),
            user_id int,
            FOREIGN KEY (user_id) REFERENCES users(id)
        );
    ";

    // user address table model

    $userAddress = "
        CREATE TABLE user_Address (
            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id INT,
            address_line1 VARCHAR(255),
            address_line2 VARCHAR(255),
            city VARCAHR(255),
            postal_code VARCHAR(100),
            country VARCHAR(100),
        );
    ";

$userPurchases = "
    CREATE TABLE userPuchases (
    );
    "


?>