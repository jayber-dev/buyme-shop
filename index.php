<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Script tags to external services -->
    <script src="https://kit.fontawesome.com/4d1964c718.js" crossorigin="anonymous"></script>
    <script src="./static/js/index.js" defer></script>
    <!-- Stylesheets links internal and external -->
    <link rel="stylesheet" href="/static/css/index.css">
    <link rel="stylesheet" href="/static/css/navbar.css">
    <link rel="stylesheet" href="/static/css/footer.css">
    <link rel="stylesheet" href="/static/css/search-bar.css">
    <title>Buyme</title>
</head>
<body>

    <?php
        include './serve/navbar.php';
    ?>

    <?php
        include './serve/search.php'
    ?>

    <a href="./serve/item.php"> Item page</a>
    <br>
    <a href="./serve/product.php"> Product page</a>

    
    <?php
        include './serve/footer.php'
    ?>
       
</body>
</html>