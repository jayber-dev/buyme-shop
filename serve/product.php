<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/product.css">
    <title>Document</title>
</head>
<body>
    <?php
        include './navbar.php';
    ?>

    <div class="product">
        <div class="image-info">
            <img src="/static/images/ice-cream-2987955_1280.jpg" alt="product" class="product-image">
        </div>
        <div class="item-info">
            <div class="item-details">
                <h1>title</h1>
                <h3>sub title (maybe???)</h3>
                <p> lalalalalalal</p>
                <h1>price : 412.214</h1>
                <button>add to cart</button>
            </div>           
        </div>
    </div>

    <hr style="width:80% ;">
    <div>
        <h1 style="text-align:center ;">item details</h1>
    </div>

    <?php
        include './footer.php';
    ?>
</body>
</html>