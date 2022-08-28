 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/footer.css">
    <link rel="stylesheet" href="/static/css/search-bar.css">
    <link rel="stylesheet" href="/static/css/signup-form.css">
    <script src="/static/js/signup.js" defer></script>
    <title>signing form</title>
</head>
<body>
   
        <!-- <?php
            include './views/partials/_navbar.php';
        ?>

        <?php
            include './views/partials/_search.php'
        ?>    -->

<div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>

                <div class="input-group">
                    <input type="text" placeholder="User" class="input" />
                    <input type="email" placeholder="Email" class="input" />
                    <input type="password" placeholder="Password" class="input" />
                      <span class="ripple"></span>
                  </div>
                  <div class="pass-strength">
                      <div class="strength-precent"><span></span></div>
                      <span class="strength-label">Strength</span>
                  </div>
                <button class="btn">Sign Up</button>
            </form>
        </div>
    
        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="#" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                  <input type="email" placeholder="Email" class="input" />
                 <input type="password" placeholder="Password" class="input" />
                <a href="#" class="link">Forgot your password?</a>
                <button class="btn">Sign In</button>
            </form>
        </div>
    
        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php
        include './views/partials/_footer.php'
    ?>  -->

</body>
</html>