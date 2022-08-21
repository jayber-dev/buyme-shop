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
    <div class="search-and-navbar">
        <?php
            include './views/navbar.php';
        ?>

        <?php
            include './views/search.php'
        ?> 
    </div>
    
    <div class="example"></div>
    <h1> wow</h1>
    <a href="./views/product.php"> nanasnd</a>
    <a href="./views/item.php"> Item page</a>
    <br>
    

    
    <?php
        include './views/footer.php'
    ?>
       
</body>
</html>