
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
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/book.css"/>
</head>

<body>

    <!-- header starts here -->
    <section class="header">
        <a href="home.php" class="logo"><i class="fas fa-bus"></i>Travel...</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>
    <!-- header ends here -->

    <div class="heading" style="background:url(./images/book.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts here -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>

    </section>

    <!-- booking section ends here -->
    

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="./js/script.js"></script>


</body>
</html>

