<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
    </style>
    <!-- CSS Link of Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- CDN link of FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- external css file link -->
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
            <a href="register.php">Sign Up</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>
<!-- header ends here -->

<!-- home section starts here -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(./images/carousal01.jpg) no-repeat">
                    <div class="content">
                        <span>plan, travel, explore</span>
                        <h3>Perfect partner for trip</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(./images/carousal02.jpg) no-repeat">
                    <div class="content">
                        <span>plan, travel, explore</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(./images/carousal03.jpg) no-repeat">
                    <div class="content">
                        <span>plan, travel, explore</span>
                        <h3>Discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </section>
<!-- home section ends here -->

<!-- services sections starts here -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="./images/services01.png" alt="">
                <h2>adventure</h2>
            </div>
            <div class="box">
                <img src="./images/services02.png" alt="">
                <h2>tour guide</h2>
            </div>
            <div class="box">
                <img src="./images/services03.png" alt="">
                <h2>trekking</h2>
            </div>
            <div class="box">
                <img src="./images/services04.png" alt="">
                <h2>camp fire</h2>
            </div>
            <div class="box">
                <img src="./images/services05.png" alt="">
                <h2>off road</h2>
            </div>
            <div class="box">
                <img src="./images/services06.png" alt="">
                <h2>camping</h2>
            </div>
        </div>
    </section>
<!-- services sections ends here -->


<!-- home about section starts -->

    <section class="home-about">
        <div class="image">
            <img src="./images/homeabout.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>We are a team of passionate travelers who believe that exploring the world is one of life's greatest pleasures. With years of experience in the industry, we have developed a deep understanding of what makes a great travel experience and we use this knowledge to design tours that exceed our clients' expectations.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
<!-- home about section ends -->


<!-- home package starts from here -->
    <section class="home-package">
        <h1 class="heading-title">our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./images/rajasthan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>rajasthan desert safari</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, repellat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/kashmir.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kashmir</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, repellat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/kerala.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kerala</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, repellat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

<!-- home package ends from here -->
    

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="./js/script.js"></script>


</body>
</html>