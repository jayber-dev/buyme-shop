<?php
// TODO: finish the users models
// TODO: build the products db model
// TODO: user_payment model build at the end



// users managment models

    $usersTableModel = "
        CREATE TABLE users (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(100),
            last_name VARCHAR(100),
            email VARCHAR(100),
            phone_number VARCHAR(30)
            created_at DATETIME ,
        );
    ";

    // passwords stored in a different table 

    $loginsTableModel = "
        CREATE TABLE logins (
            Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id int,
            password_salt VARCHAR(8),
            password_hash VARCHAR(255),  
            FOREIGN KEY (user_id) REFERENCES users(id)
        );
    ";

    // user address table model

    $userAddressModel = "
        CREATE TABLE user_Address (
            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id INT,
            address_line1 VARCHAR(255),
            address_line2 VARCHAR(255),
            city VARCAHR(255),
            postal_code VARCHAR(100),
            country VARCHAR(100),
            FOREIGN KEY (user_id) REFERENCES users(id)
        );
    ";

$userPurchases = "
    CREATE TABLE userPuchases (
    );
    "


?>