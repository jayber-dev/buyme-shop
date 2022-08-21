<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/navbar.css">
    <link rel="stylesheet" href="/static/css/index.css">
    <link rel="stylesheet" href="/static/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../static/js/navbar.js" defer></script>
    
    <title>Document</title>
</head>
<body>
    <?php
        include './_navbar.php';
    ?>

<div class="product">
        <div class="image-info">
            <img src="../static/images/ice-cream.jpg" alt="product" class="product-image">
        </div>
        <div class="item-info">
            <div class="item-details">
                <br><br><br><br><br>
                <h1 style="text-align:center ;">גלידה</h1>

                <h2>₪18.90 מחיר מבצע

                </h2>

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <h3> מגנום שוקולד</h3>


                <h4>באיזה טעם תבחר ?</h4>
                <button id="btnchoice">שוקלד חלב</button>
                <button>שוקולד מריר</button>
                <button>שוקולד לבן</button>
                <button>שוקולד פיסטוק</button>
                <br><br>
                <h4>מארז של כמה ?</h4>
                <button id="btnchoice"> 6</button>
                <button>12</button>
                <button>28 </button>
                <button>22 </button>
                <input type="number" placeholder="כמות ->" min="6">
                <br><br>
                <h4>ניתן להוסיף להזמנה</h4>
                <button id="btnchoice"> בלה</button>
                <button>בלה בלה</button>
                <button>בלה בלה</button>
                <button>בהל בלה</button>
                <br><br>
                <button id="btn"><a href="./../CssNeon/index.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> Add To Cart
                </a></button>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <hr style="width:80% ;">
    <div>
        <h1 style="text-align:center ;">item details</h1>
        <br><br><br><br><br>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas ab eligendi vel eveniet totam, eius et commodi molestiae. Quibusdam corrupti tempora ratione ea non ducimus itaque, ut consectetur laboriosam. Aperiam?Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Enim rerum fugiat, pariatur deleniti dolorem inventore assumenda voluptatem reiciendis ipsam molestias fugit aspernatur accusamus fuga optio itaque? Magnam accusantium quaerat Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Dignissimos deleniti ad corrupti obcaecati, quibusdam laboriosam reprehenderit expedita laudantium sapiente adipisci necessitatibus consectetur, exercitationem, iusto magnam! Optio quidem cum dignissimos esse!Loremlor Lorem ipsum dolor
            sit amet consectetur adipisicing elit. Provident consectetur id non consequuntur velit adipisci. Voluptate magni nemo voluptatem quidem nisi, eius id vel soluta beatae temporibus! Hic, porro neque Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Ipsam ut perferendis vel minus voluptatum molestias quas odit labore cupiditate nulla officia asperiores, necessitatibus sed laudantium maxime magnam voluptatem excepturi at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            quam autem est corrupti quis numquam placeat mollitia alias dolore sit veniam eos explicabo animi, harum quibusdam porro deleniti exercitationem tempore! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolor laudantium
            incidunt voluptatem, nisi dolorum repellat, natus accusantium eligendi, delectus sunt aliquid maxime architecto debitis suscipit iure reprehenderit porro excepturi.</p>
    </div>
    <br><br><br><br><br>
    <br><br>
    <hr style="width:80% ;">
    <br>
    <h1 style="text-align:center ;">Reviews</h1>
    <div class="Reviews">

        <div id="cardREVIEWS">
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <h4>linor k.</h4>
            <h1>08\04\2022</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laborum itaque praesentium id architecto rem minus saepe consequuntur veniam laboriosam incidunt deleniti impedit molestias, aspernatur fugiat suscipit? Suscipit, sequi voluptatem?</p>
        </div>
        <div id="cardREVIEWS">
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>

            <h4>Ron k.</h4>
            <h1>19\10\2022</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laborum itaque praesentium id architecto rem minus saepe consequuntur veniam laboriosam incidunt deleniti impedit molestias, aspernatur fugiat suscipit? Suscipit, sequi voluptatem?</p>
        </div>
        <div id="cardREVIEWS">
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <h4>oz f.</h4>
            <h1>03\05\2022</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laborum itaque praesentium id architecto rem minus saepe consequuntur veniam laboriosam incidunt deleniti impedit molestias, aspernatur fugiat suscipit? Suscipit, sequi voluptatem?</p>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
        include './_footer.php';
    ?>
</body>
</html>