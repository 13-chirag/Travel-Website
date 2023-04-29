<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Link of Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- CDN link of FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- external css file link -->
    <link rel="stylesheet" href="./css/about.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    
</head>

<body>

    <!-- header starts here -->
    <section class="header">
        <a href="home.php" class="logo"><i class="fas fa-bus"></i>Travel...</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>
    <!-- header ends here -->

    <!-- about section starts -->

    <div class="heading" style="background:url(./images/about01.jpg) no-repeat">
        <h1>about us</h1>
    </div>
    <section class="about">
        <div class="image">
            <img src="./images/about02.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Our mission is to create unforgettable travel experiences for our clients by offering unique and personalized tours that showcase the best each destination has to offer. With years of experience in the industry, we have developed a deep understanding of what makes a great travel experience and we use this knowledge to design tours that exceed our clients' expectations. Join us on a journey of discovery and adventure and let us show you the world like you've never seen it before.</</p>
            

            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="./js/script.js"></script>


</body>
</html>