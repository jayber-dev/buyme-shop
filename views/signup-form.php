 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/navbar.css">
    <link rel="stylesheet" href="/static/css/footer.css">
    <link rel="stylesheet" href="/static/css/search-bar.css">
    <link rel="stylesheet" href="/static/css/signup-form.css">
    <title>signing form</title>
</head>
<body>
   
<?php 
    include './navbar.php';

    include './search.php'
    ?>

    <div class="form-container">
        <form class="form" action="">

            <input class="userName" type="text">
            <input class="email" type="text">
            <input class="password" type="text">

        </form>
    </div>

    <?php
    include './footer.php'
    ?>

</body>
</html>