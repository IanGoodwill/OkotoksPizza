<!DOCTYPE html>

<html>

<head>
    <title>Okotoks Pizza</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ian Goodwill">
    <link rel="shortcut icon" type="image/png" href="./img/okotoks-pizza-logo2.png">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script src="./js/app.js"></script>
    <script src="https://kit.fontawesome.com/901edefaa6.js" crossorigin="anonymous"></script>
    <meta name="description" content="Home page for okotoks pizza">
    <meta name="keywords" content="pizza,burger,okotoks,delivery">
    <meta name="viewport" content="width=device-width, initial-scale=1. maximum-scale=1, user-scalable=0">
    <meta property="og:url" content="file:///C:/Users/Ian%20Goodwill/Documents/Innotech/okotoks-pizza2/index.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Okotoks Pizza" />
    <meta property="og:description"
        content="A website for Okotoks Pizza. Website has a menu for the company Okotoks Pizza as well as their contact information." />
    <meta property="og:image" content="./img/hdpizza.jpeg" />
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Okotoks Pizza">
    <meta name="twitter:description"
        content="A website for Okotoks Pizza. Website has a menu for the company Okotoks Pizza as well as their contact information.">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="./img/hdpizza.jpeg">
</head>

<body>

    <div class="homepage">

        <header class="header">

            <div class="logo">

            </div>

            <input class="menu-btn" type="checkbox" id="menu-btn" />

            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

            <ul class="menu" role="navigation">
                <li><a href="./index.html">HOME</a></li>
                <li><a href="./pages/menu.html">MENU</a></li>
                <li><a href="./pages/about.html">ABOUT</a></li>
                <li><a href="./pages/contact&location.html">CONTACT & LOCATION</a></li>
            </ul>

        </header>

        <article class="homepage-content">

            <h1>WELCOME TO OKOTOKS PIZZA</h1>

            <div class="fling-minislide">
                <img src="./img/slideshow-images/blur-close-up-cutlery-dining-highres.jpg" alt="Slide 4" />
                <img src="./img/slideshow-images/close-up-photo-of-person-holding-pizza-highres.jpg" alt="Slide 3" />
                <img src="./img/slideshow-images/group-of-people-gathering-inside-bar-highres.jpg" alt="Slide 2" />
                <img src="./img/slideshow-images/baked-pepperoni-pizza-highres.jpg" alt="Slide 1" />
            </div>

        </article>

        <article class="home-link-menu">

            <nav>
                <a href="./pages/menu.html" title="Feeling Hungry? Check Out Our Menu!"></a>
            </nav>

            <h3>Feeling Hungry Yet? To Check Out Our Menu Click Below!</h3>
            </a>

            <nav>
                <a href="./pages/menu.html" title="Feeling Hungry? Check Out Our Menu!">
                    <i class="fas fa-utensils" label="menuitem"></i>
                </a>
            </nav>

        </article>

        <section class="goodbye">

            <h4>Thank you for Visiting! Tell your Friends!</h4>

            <p>  <?php echo( "Hello, World!" ); ?> </p>

        </section>

        <footer class="footer">

            <a class="phone-footer" href="tel:4035555555">
                <h3>Call us at (403)555-5555</h3>
            </a>

            <h3 class="copyright">&copy; Copyright 2019</h3>

        </footer>

    </div>

</body>

</html>