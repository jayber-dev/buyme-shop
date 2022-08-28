<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Script tags to external services -->
    <script src="https://kit.fontawesome.com/4d1964c718.js" crossorigin="anonymous"></script>
    <script src="./static/js/index.js" defer type="module"></script> 
    <script src="./static/js/navbar.js" defer></script>
    <!-- Stylesheets links internal and external -->
    <link rel="stylesheet" href="/static/css/index.css">
    <link rel="stylesheet" href="/static/css/navbar.css">
    <link rel="stylesheet" href="/static/css/footer.css">
    <link rel="stylesheet" href="/static/css/search-bar.css">
    <link rel="stylesheet" href="/static//css/carousel.css">
    
    
    <title>Buyme</title>
</head>
<body>
    <div class="search-and-navbar">
        <?php
            include './views/_navbar.php';
        ?>

        <?php
            include './views/_search.php'
        ?>       
    </div>
    
    <?php
            include './views/_carousel.php'
        ?>
    
    <div class="categories">
        
    </div>
    
       
    <?php
        include './views/_footer.php'
    ?> 


       
</body>
</html>