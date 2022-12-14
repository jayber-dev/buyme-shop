<?php
    require __DIR__ . '/vendor/autoload.php';

    $router = new \Bramus\Router\Router();

    $router->get('/', function(){
       include './views/main.php';
    });

    $router->get('/product', function() {
        include './views/product.php';
    });

    $router->get('login', function() {
        include './views/signup-form.php'; 
    });

    $router->run();

    
?>